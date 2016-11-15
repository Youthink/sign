var router = require('koa-router');
app.use(router(app));
app.get(function *(){
	//个人主页
	if(this.path === '/person'){
		this.body = '个人主页';
	}

	if(this.path === '/search'){
		this.body = '搜索页面';
	}
})
