import Token from './Token'
import AppStorage from './AppStorage'
class User {



    paymentamount(type, classname) {
        var needAmount;
        if (type == 'Monthly_fee') {
            if (classname == 'Eight') {
                needAmount = 500;
            } else if (classname == 'Nine') {
                needAmount = 500;
            } else if (classname == 'Ten') {
                needAmount = 500;
            } else {
                needAmount = 400;
            }
        } else if (type == 'Session_fee') {
            needAmount = 500;
        } else if (type == 'Exam_fee') {
            needAmount = 200;
        } else {
            needAmount = 0;
        }
        return needAmount;
    }
    dateformat(date = '') {
        var dates = [];
        if (date == '') {
            var today = new Date();
        } else {
            var today = new Date(date);
        }
        var dd = today.getDate();
        var mm = today.getMonth() + 1;
        var yyyy = today.getFullYear();
        let hrs = today.getHours()
        let mins = today.getMinutes()
        var ampm = hrs >= 12 ? 'pm' : 'am';

        if (dd < 10) {
            dd = '0' + dd;
        }
        if (mm < 10) {
            mm = '0' + mm;
        }

        if(hrs<=9){
            hrs = '0' + hrs

        }
        if(mins<10){

            mins = '0' + mins
        }



        today = yyyy + '-' + mm + '-' + dd;
        dates.push(today)
        today = mm + '-' + dd + '-' + yyyy;
        dates.push(today)
        today = mm + '/' + dd + '/' + yyyy;
        dates.push(today)
        today = dd + '-' + mm + '-' + yyyy;
        dates.push(today)
        today = dd + '/' + mm + '/' + yyyy;
        dates.push(today)
        today = yyyy;
        dates.push(today)
        today = yyyy + '-' + mm + '-' + dd + ' '+ hrs+':'+ mins+' '+ampm;
        dates.push(today)
        return dates;
    }
    feesconvert(text) {
        var result;
        if (text == 'Monthly_fee') {
            result = 'মাসিক বেতন';
        } else if (text == 'মাসিক বেতন') {
            result = 'Monthly_fee';
        } else if (text == 'Session_fee') {
            result = 'সেশন ফি';
        } else if (text == 'সেশন ফি') {
            result = 'Session_fee';
        } else if (text == 'Exam_fee') {
            result = 'পরিক্ষার ফি';
        } else if (text == 'পরিক্ষার ফি') {
            result = 'Exam_fee';
        } else if (text == 'Other') {
            result = 'অন্যান্য';
        } else if (text == 'অন্যান্য') {
            result = 'Other';
        }
        return result;
    }
    subjectconverten(str) {
        if (str == 'বাংলা') {
            str = "Bangla";
        } else if (str == 'বাংলা ১ম') {
            str = "Bangla_1st";
        }
        else if (str == 'বাংলা ২য়') {
            str = "Bangla_2nd";
        }
        else if (str == 'ইংলিশ') {
            str = "English";
        }
        else if (str == 'ইংলিশ ১ম') {
            str = "English_1st";
        }
        else if (str == 'ইংলিশ ২য়') {
            str = "English_2nd";
        }
        else if (str == 'গনিত') {
            str = "Math";
        } else if (str == 'বিজ্ঞান') {
            str = "Science";
        } else if (str == 'পদার্থ') {
            str = "physics";
        } else if (str == 'রসায়ন') {
            str = "Chemistry";
        } else if (str == 'জীব-বিজ্ঞান') {
            str = "Biology";
        } else if (str == 'ভূগোল') {
            str = "vugol";
        } else if (str == 'অর্থনীতি') {
            str = "orthoniti";
        } else if (str == 'ইতিহাস') {
            str = "itihas";
        } else if (str == 'বাংলাদেশ ও বিশ্ব পরিচয়') {
            str = "B_and_B";
        } else if (str == 'ধর্ম') {
            str = "Religion";
        } else if (str == 'ইসলাম-ধর্ম') {
            str = "ReligionIslam";
        } else if (str == 'হিন্দু-ধর্ম') {
            str = "ReligionHindu";
        } else if (str == 'কৃষি') {
            str = "Agriculture";
        } else if (str == 'তথ্য ও যোগাযোগ প্রযোক্তি') {
            str = "ICT";
        }
        //         let banglaNumber=
        //         {
        //         "বাংলা":"Bangla",
        //         "বাংলা ১ম":"Bangla_1st",
        //         "বাংলা ২য়":"Bangla_2nd",
        //         "ইংলিশ":"English",
        //         "ইংলিশ ১ম":"English_1st",
        //         "ইংলিশ ২য়":"English_2nd",
        //         "গনিত":"Math",
        //         "বিজ্ঞান":"Science",
        //         "পদার্থ":"physics",
        //         "রসায়ন":"Chemistry",
        //         "জীব-বিজ্ঞান":"Biology",
        //         "ভূগোল":"vugol",
        //         "অর্থনীতি":"orthoniti",
        //         "ইতিহাস":"itihas",
        //         "বাংলাদেশ ও বিশ্ব পরিচয়":"B_and_B",
        //         "ধর্ম":"Religion",
        //         "ইসলাম-ধর্ম":"ReligionIslam",
        //         "হিন্দু-ধর্ম":"ReligionHindu",
        //         "কৃষি":"Agriculture",
        //         "তথ্য ও যোগাযোগ প্রযোক্তি":"ICT",
        // }
        //     for (var x in banglaNumber) {
        //         str = str.replace(new RegExp(x, 'g'), banglaNumber[x]);
        //     }
        return str;
    }
    subjectconvertbn(str) {

        if (str == 'Bangla') {
            str = "বাংলা";
        } else if (str == 'Bangla_1st') {
            str = "বাংলা ১ম";
        }
        else if (str == 'Bangla_2nd') {
            str = "বাংলা ২য়";
        }
        else if (str == 'English') {
            str = "ইংলিশ";
        }
        else if (str == 'English_1st') {
            str = "ইংলিশ ১ম";
        }
        else if (str == 'English_2nd') {
            str = "ইংলিশ ২য়";
        }
        else if (str == 'Math') {
            str = "গনিত";
        } else if (str == 'Science') {
            str = "বিজ্ঞান";
        } else if (str == 'physics') {
            str = "পদার্থ";
        } else if (str == 'Chemistry') {
            str = "রসায়ন";
        } else if (str == 'Biology') {
            str = "জীব-বিজ্ঞান";
        } else if (str == 'vugol') {
            str = "ভূগোল";
        } else if (str == 'orthoniti') {
            str = "অর্থনীতি";
        } else if (str == 'itihas') {
            str = "ইতিহাস";
        } else if (str == 'B_and_B') {
            str = "বাংলাদেশ ও বিশ্ব পরিচয়";
        } else if (str == 'Religion') {
            str = "ধর্ম";
        } else if (str == 'ReligionIslam') {
            str = "ইসলাম-ধর্ম";
        } else if (str == 'ReligionHindu') {
            str = "হিন্দু-ধর্ম";
        } else if (str == 'Agriculture') {
            str = "কৃষি";
        } else if (str == 'ICT') {
            str = "তথ্য ও যোগাযোগ প্রযোক্তি";
        }


        // let banglaNumber =
        // {
        //     "Bangla": "বাংলা",
        //     "Bangla_1st": "বাংলা ১ম",
        //     "Bangla_2nd": "বাংলা ২য়",
        //     "English": "ইংলিশ",
        //     "English_1st": "ইংলিশ ১ম",
        //     "English_2nd": "ইংলিশ ২য়",
        //     "Math": "গনিত",
        //     "Science": "বিজ্ঞান",
        //     "physics": "পদার্থ",
        //     "Chemistry": "রসায়ন",
        //     "Biology": "জীব-বিজ্ঞান",
        //     "vugol": "ভূগোল",
        //     "orthoniti": "অর্থনীতি",
        //     "itihas": "ইতিহাস",
        //     "B_and_B": "বাংলাদেশ ও বিশ্ব পরিচয়",
        //     "Religion": "ধর্ম",
        //     "ReligionIslam": "ইসলাম-ধর্ম",
        //     "ReligionHindu": "হিন্দু-ধর্ম",
        //     "Agriculture": "কৃষি",
        //     "ICT": "তথ্য ও যোগাযোগ প্রযোক্তি"
        // }
        // for (var x in banglaNumber) {
        //     str = str.replace(new RegExp(x, 'g'), banglaNumber[x]);
        // }
        return str;
    }
    exam_comvert(str) {
        let banglaNumber =
        {
            "Weakly Examination": "Weakly_Examination",
            "ADMITION TEST RESULT": "ADMITION_TEST_RESULT",
            "First Terminals Examination": "First_Terminals_Examination",
            "Second Terminals Examination": "Second_Terminals_Examination",
            "Annual Examination": "Annual_Examination",
            "Test Examination": "Test_Examination",
        }
        for (var x in banglaNumber) {
            str = str.replace(new RegExp(x, 'g'), banglaNumber[x]);
        }
        return str;
    }
    examcomvert(str) {
        let banglaNumber =
        {
            "Weakly_Examination": "Weakly Examination",
            "ADMITION_TEST_RESULT": "ADMITION TEST RESULT",
            "First_Terminals_Examination": "First Terminals Examination",
            "Second_Terminals_Examination": "Second Terminals Examination",
            "Annual_Examination": "Annual Examination",
            "Test_Examination": "Test Examination"
        }
        for (var x in banglaNumber) {
            str = str.replace(new RegExp(x, 'g'), banglaNumber[x]);
        }
        return str;
    }
    classlist() {
        var classess = [];
        axios.get('/api/classes')
            .then(({ data }) => {
                // console.log(data)
                classess.push(data)
            })
            .catch()
        return classess;
    }
    yearslist() {
        var yearslist = [];
        axios
            .get("/api/years/list?type=year")
            .then(({ data }) => {
                yearslist.push(data)
            })
            .catch();
        return yearslist;
    }
    subjects(classname) {
        var yearslist = [];
        axios
            .get(`/api/years/list?type=subjects&class=${classname}`)
            .then(({ data }) => {
                yearslist.push(data)
            })
            .catch();
        return yearslist;
    }
    days() {
        var list = [];
        axios
            .get(`/api/years/list?type=days`)
            .then(({ data }) => {
                list.push(data)
            })
            .catch();
        return list;
    }
    schoolDetils() {
        var list = [];
        axios
            .get(`/api/school_id`)
            .then(({ data }) => {
                list.push(data)

            })
            .catch();
        return list;
    }
    all_list(type = '', classname = '', group = '') {
        var list = [];
        axios
            .get(`/api/years/list?type=${type}&class=${classname}&group=${group}`)
            .then(({ data }) => {
                list.push(data)
            })
            .catch();
        return list;
    }
    monthslist() {
        var monthslist = [];
        axios
            .get("/api/years/list?type=month")
            .then(({ data }) => {
                monthslist.push(data)
            })
            .catch();
        return monthslist;
    }
    responseAfterLogin(res) {
        const access_token = res.data.access_token
        const username = res.data.name
        const role = res.data.role
        const teacherOrstudent = res.data.teacherOrstudent
        const users = res.data.users
        const usersid = res.data.user_id
        if (Token.isValid(access_token)) {
            AppStorage.store(access_token, username, role, teacherOrstudent, users, usersid)
        }
    }
    hasToken() {
        const storeToken = localStorage.getItem('token');
        if (storeToken) {
            return Token.isValid(storeToken) ? true : false
        }
        false
    }
    loggedIn() {
        return this.hasToken()
    }
    name() {
        if (this.loggedIn()) {
            return localStorage.getItem('user');
        }
    }
    id() {
        if (this.loggedIn()) {
            const payload = Token.payload(localStorage.getItem('token'));
            return payload.sub
        }
        return false
    }
}
export default User = new User()
