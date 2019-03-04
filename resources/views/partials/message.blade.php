<?php
/**
 * Created by PhpStorm.
 * User: Mobarok Hossen
 * Date: 9/20/2017
 * Time: 10:08 AM
 */
?>

@if (!empty(Session::get('success')) || !empty(Session::get('error')))
    <div class="col-md-12 alert-margin no-padding alert-out">
        <div class="alert  {{ !empty(Session::get('success'))?'alert-success':'alert-danger'}}">
            <button type="button" class="close" data-dismiss="alert">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
            {{ !empty(Session::get('success'))?Session::get('success'):Session::get('error')}}
        </div>
    </div>
@endif
