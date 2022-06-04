
@extends('layout.layout')


@section('container')

    <!-- Main Start -->
    <main class="container-fluid">
        <div class="row">
            <!-- Left Main -->
            <div class="col-lg-9 my-3">
<div class="container">
    <table cellpadding="3" cellspacing="0" style="margin: 0 auto;margin-top: 22px;margin-bottom: 25px;" width="100%">
        <tr>
            <td colspan="2" class="columnStyleTop">
                অধ্যয়নরত শিক্ষার্থীর তালিকা
            </td>
        </tr>
        <form id="form" enctype="multipart/form-data" onsubmit="return false" method="POST" action="">
            <tr>
                <td class="columnStyleLeft" style="font-family: Century Gothic; font-size: 10pt;">
                    শ্রেণী :
                </td>
                <td class="columnStyleRight">
                    <select name="class"  id="ContentPlaceHolder1_cmbClass" class="form-control">
                        <option selected="selected" value="">শ্রেণী নির্বাচন করুন</option>
                        <option v-for="classlist in classes[0]">{{ classlist }}</option>
                    </select>
                </td>
            </tr>



<input type="hidden" name="year" class="form-control" value="<?php echo date('Y') ?>" readonly>


            <tr>
                <td colspan="2">
                    <center>
                        <button name="save_btn" id="save_btn" onclick="formSubmit();" class="btn btn-info">SEARCH</button>
                        <button class="btn btn-info" id="show_spin"></button>
                    </center>
                </td>
            </tr>
        </form>
        <tr>
            <td colspan="2" class="columnStyleRight">
            </td>
        </tr>
    </table>
    <div id="show"></div>
</div>


</div>


<x-sidebar />
</div>
</main>
<!-- Main End -->



@endsection
