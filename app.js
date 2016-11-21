import Koa from 'koa';
const app = new Koa();
var router = require('koa-router')();

app.use(async(ctx, next) => {
    const start = new Date();
    await next();
    const ms = new Date() - start;
    console.log(`${ctx.method} ${ctx.url} - ${ms}ms`);
});


router.get('/', function(ctx, next) {
    ctx.body = '首页';
});
app.use(router.routes()).use(router.allowedMethods());

app.listen(3000);
console.log('正在监听3000端口');