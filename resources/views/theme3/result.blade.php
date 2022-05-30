@extends(sitedetails()[0]->theme.'.layout')

@section('container')
    <!-- Main Start -->
    <main class="container-fluid">
        <div class="row">
            <!-- Left Main -->
            <div class="col-lg-12 my-3"  style="margin: 50px 0;">
<div class="container">
    <table cellpadding="3" cellspacing="0" style="margin: 0 auto;margin-top: 22px;margin-bottom: 25px;" width="100%">
        <tr>
            <td colspan="2" class="columnStyleTop">
                পরীক্ষার ফলাফল
            </td>
        </tr>
        <form id="form" enctype="multipart/form-data" onsubmit="return false" method="POST" action="">
            <tr>
                <td class="columnStyleLeft" style="font-family: Century Gothic; font-size: 10pt;">
                    শ্রেণী :
                </td>
                <td class="columnStyleRight">
                    <select name="class" id="ContentPlaceHolder1_cmbClass" class="form-control" required>
                        <option selected="selected" value="Select Class">শ্রেণী নির্বাচন করুন</option>
                        <option value="Play">{{ class_en_to_bn('Play') }}</option>
                        <option value="Nursery">{{ class_en_to_bn('Nursery') }}</option>
                        <option value="One">{{ class_en_to_bn('One') }}</option>
                        <option value="Two">{{ class_en_to_bn('Two') }}</option>
                        <option value="Three">{{ class_en_to_bn('Three') }}</option>
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
                    রোল :
                </td>
                <td class="columnStyleRight">
                    <input type="text" name="roll" onchange="" id="roll" placeholder="রোল ইনপুট করুন" class="form-control" />
                </td>
            </tr>
            <tr>
                <td class="columnStyleLeft" style="font-family: Century Gothic; font-size: 10pt;">
                সাল :
                </td>
                <td class="columnStyleRight">
                    <select name="year" onchange="year(this.value)" id="ContentPlaceHolder1_cmbShift" class="form-control">
                        <option selected="selected" value="Select Shift">সাল নির্বাচন করুন</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                        <option value="2027">2027</option>
                        <option value="2028">2028</option>
                        <option value="2029">2029</option>
                        <option value="2030">2030</option>
                        <option value="2031">2031</option>
                        <option value="2032">2032</option>
                        <option value="2033">2033</option>
                        <option value="2034">2034</option>
                        <option value="2035">2035</option>
                        <option value="2036">2036</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="columnStyleLeft" style="font-family: Century Gothic; font-size: 10pt;">পরীক্ষার নাম :
                </td>
                <td class="columnStyleRight">
                    <select name="exam_name" onchange="" id="ContentPlaceHolder1_cmbSchool" class="form-control">
                        <option selected="selected" value="">পরীক্ষার নাম নির্বাচন করুন</option>
                        <option>ADMITION TEST RESULT</option>
                        <option>First Terminals Examination</option>
                        <option>Second Terminals Examination</option>
                        <option>Annual Examination</option>
                        <option>Test Examination</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <center>
                        <button name="save_btn" id="save_btn" onclick="formSubmit2();" class="btn btn-info">SEARCH</button>
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



</div>
</main>
<!-- Main End -->



@endsection
