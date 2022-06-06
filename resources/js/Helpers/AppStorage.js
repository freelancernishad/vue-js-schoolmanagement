class AppStorage{

	storeToken(token){
		localStorage.setItem('token',token);
	}

	storeUser(user){
		localStorage.setItem('user',user);
	}
	storerole(role){
		localStorage.setItem('role',role);
	}
	storeteacherOrstudent(teacherOrstudent){
		localStorage.setItem('teacherOrstudent',teacherOrstudent);
	}
	storeusers(users){
		localStorage.setItem('users',users);
	}
    storeusersid(usersid){
		localStorage.setItem('usersid',usersid);
	}

	store(access_token, username, role, teacherOrstudent, users, usersid){
		this.storeToken(access_token)
		this.storeUser(username)
		this.storerole(role)
		this.storeteacherOrstudent(teacherOrstudent)
		this.storeusers(users)
		this.storeusersid(usersid)
	}

	clear(){
		localStorage.removeItem('token')
		localStorage.removeItem('user')
	}

	getToken(){
		localStorage.getItem(token);
	}

	getUser(){
		localStorage.getItem(user);
	}

}

export default AppStorage = new AppStorage();
