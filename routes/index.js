import Router from 'koa-router';
const router = new Router();

router.get('/', async(ctx, next) => {
    await ctx.render('index', {
        title: 'Hello World Koa!'
    });
});

router.get('/person', async(ctx) => {
    await ctx.render('person', {
        title: 'person!'
    });
});

export default router;