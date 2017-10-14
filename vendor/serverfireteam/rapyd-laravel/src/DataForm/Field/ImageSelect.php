<?php

namespace Zofe\Rapyd\DataForm\Field;

use Collective\Html\FormFacade as Form;
use Illuminate\Support\Facades\Input;
use Intervention\Image\ImageManagerStatic as ImageManager;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class ImageSelect extends Field
{
    public $type = "image-select";

    protected $preview = array(120, 80);
    protected $path = '';
    protected $web_path = '';
    protected $filename = '';
    protected $saved = '';
    protected $unlink_file = true;
    protected $upload_deferred = false;
    protected $recursion = false;

    public function thumb()
    {
        if (!\File::exists($this->path.$this->old_value)) return '';
            $fileTypesvideo = array('mpg','mpeg','mp4','m2ts','mts','mov','wmv','avi','MPG','MPEG','MP4','M2TS','MTS','MOV','WMV','AVI');
            $extension = explode('.', $this->path.$this->old_value);
            if(!in_array(end($extension),$fileTypesvideo)){
                return '<img src="'.ImageManager::make($this->path.$this->old_value)->fit($this->preview[0], $this->preview[1])->encode('data-url').'" class="pull-left" style="margin:0 10px 10px 0">';
            } else {
                return '<video width="320" height="240" controls>
                      <source src="/'.$this->path.$this->old_value.'" type="video/'.end($extension).'">
                      Your browser does not support HTML5 video.
                    </video>';
            }
    }

    public function build()
    {
        $output = "";
        if (parent::build() === false)
            return;

        switch ($this->status) {
            case "disabled":
            case "show":
                if ($this->type == 'hidden' || $this->value == "") {
                    $output = "";
                } elseif ((!isset($this->value))) {
                    $output = $this->layout['null_label'];
                } else {
                    $output =  $this->thumb();
                }
                $output = "<div class='help-block'>" . $output . "&nbsp;</div>";
                break;

            case "create":
            case "modify":
                if ($this->old_value != "") {
                    $output .= '<div class="clearfix">';
                    $output .= $this->thumb()." &nbsp;".link_to($this->web_path.$this->value, $this->value, array('target'=>'_blank'))."<br />\n";
                    // $output .= Form::checkbox($this->name.'_remove', 1, (bool) Input::get($this->name.'_remove'))." ".trans('rapyd::rapyd.delete')." <br/>\n";
                    $output .= '</div>';
                }
                $output .= '<div class="input-group col-xs-4">';
                $output .= Form::text($this->name, $this->value, array_merge(array('class'=>'col-xs-12','placeholder'=>"Choose Image",'aria-describedby'=>'choose-image','readonly'=>'readonly'),$this->attributes));

                $output  .= '
                    <span class="input-group-addon brn btn-primary" id="choose-image"  data-toggle="modal" data-target="#myModal" role="presentation" style="cursor:pointer;" >Select Image <i class="mce-ico mce-i-image"></i></span>
                    </div>
                    <div id = "selectedImages"></div>
                        <link rel="stylesheet" type="text/css" href="'.asset('css/elfinder.min.css') .'">
                        <link rel="stylesheet" type="text/css" href="'.asset('packages/barryvdh/elfinder/css/theme.css').'">
                        <script src="'.asset('js/jquery-ui.min.js') .'"></script>
                        <script src="'.asset('packages/barryvdh/elfinder/js/elfinder.min.js') .'"></script>
                            <script>
                            $().ready(function() {
                                $("#myModal").on("shown.bs.modal", function() {
                                    $("#elfinder").elfinder({
                                        customData: { 
                                            _token: "'.csrf_token().'"
                                        },
                                        height: 490,
                                        resizable: "yes",
                                        url : "'.route("elfinder.connector").'",
                                        getFileCallback: function(file) {
                                            $("#choose-image").prev("input").val(file.path);
                                            $("#myModal").modal("toggle");
                                            console.log(file)
                                        }
                                    }).elfinder("instance");
                                })
                            })
                            </script>
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Select File</h4>
                                </div>
                                <div class="modal-body" style="padding:0">
                                    <div id="elfinder"></div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>';
                break;

            case "hidden":
                $output = Form::hidden($this->name, $this->value);
                break;

            default:;
        }
        $this->output = "\n" . $output . "\n" . $this->extra_output . "\n";
    }

}
