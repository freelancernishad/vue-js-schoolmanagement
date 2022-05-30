
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
                সাপ্তাহিক পরীক্ষার ফলাফল
            </td>
        </tr>
        <form id="form" enctype="multipart/form-data" onsubmit="return false" method="POST" action="">
            <tr>
                <td class="columnStyleLeft" style="font-family: Century Gothic; font-size: 10pt;">
                    শ্রেণি :
                </td>
                <td class="columnStyleRight">
                    <select name="class" id="ContentPlaceHolder1_cmbClass" class="form-control">
                        <option selected="selected" value="Select Class">শ্রেণী নির্বাচন করুন</option>
                        <option value="Play">{{ class_en_to_bn('Play') }}</option>
                        <option value="One">{{ class_en_to_bn('One') }}</option>
                        <option value="Two">{{ class_en_to_bn('Two') }}</option>
                        <option value="Two">{{ class_en_to_bn('Three') }}</option>
                        <option value="Four">{{ class_en_to_bn('Four') }}</option>
                        <option value="Five">{{ class_en_to_bn('Five') }}</option>
                        <option value="Six">{{ class_en_to_bn('Six') }}</option>
                        <option value="Seven">{{ class_en_to_bn('Seven') }}</option>
                        <option value="Eight">{{ class_en_to_bn('Eight') }}</option>
                        <option value="Nine">{{ class_en_to_bn('Nine') }}</option>
                        <option value="Ten">{{ class_en_to_bn('Ten') }}</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="columnStyleLeft" style="font-family: Century Gothic; font-size: 10pt;">
                    রোল নাম্বার :
                </td>
                <td class="columnStyleRight">
                    <input type="text" name="roll" placeholder="রোল" onchange="" id="roll" class="form-control" />
                </td>
            </tr>

            <tr>
                <td class="columnStyleLeft" style="font-family: Century Gothic; font-size: 10pt;">
                    বিষয় :
                </td>


                <td class="columnStyleRight">
                    <select id="ContentPlaceHolder1_cmbShift" class="form-control" name="subject" id="">
                     @foreach ($subject as $row)


                            <option value="<?php echo  $row->subject ?>"><?php echo  $row->subject ?></option>
                            @endforeach
                    </select>
                </td>

            </tr>
            <tr>
                <td class="columnStyleLeft" style="font-family: Century Gothic; font-size: 10pt;">
                    পরীক্ষার তারিখ:
                </td>


                <td class="columnStyleRight">
                    <select id="ContentPlaceHolder1_cmbShift" class="form-control" name="exam_date" id="">
                     @foreach ($date as $row)


                            <option value="<?php echo  $row->date ?>"><?php echo  $row->date ?></option>
                            @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <center>
                        <button name="save_btn" id="save_btn" onclick="formSubmit0();" class="btn btn-info">SEARCH</button>
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
