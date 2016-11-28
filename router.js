import Router from 'koa-router';

const router = new Router();

import  indexController  from './controllers/index';

router.get('/', async (ctx, next) => {
  await ctx.render('index',indexController);
});

router.get('/rank', async (ctx, next) => {
  await ctx.render('rank');
});

router.get('/login', async (ctx, next) => {
  await ctx.render('login');
});

router.get('/my', async (ctx, next) => {
  await ctx.render('my');
});

export default router;
