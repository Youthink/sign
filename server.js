#!/usr/local/bin/babel-node

import app from './app';

const PORT = 3000;

app.listen(PORT);
console.log(`listening on port ${PORT}`);
