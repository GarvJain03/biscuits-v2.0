/*
|--------------------------------------------------------------------------
| Routes
|--------------------------------------------------------------------------
|
| This file is dedicated for defining HTTP routes. A single file is enough
| for majority of projects, however you can define routes in different
| files and just make sure to import them inside this file. For example
|
| Define routes in following two files
| ├── start/routes/cart.ts
| ├── start/routes/customer.ts
|
| and then import them inside `start/routes.ts` as follows
|
| import './routes/cart'
| import './routes/customer''
|
*/

import Route from '@ioc:Adonis/Core/Route'

Route.get('/', 'IndicesController.index')

Route.group(() => {
  Route.get('/login', 'AuthController.getLogin')
  Route.get('/register', 'AuthController.getRegister')
  Route.post('/login', 'AuthController.postLogin')
  Route.post('/register', 'AuthController.postRegister')
})
  .middleware('guest')
  .prefix('/auth')

Route.get('/auth/logout', 'AuthController.logout')

Route.get('/dashboard', 'DashboardController.getDashboard').middleware('auth')

Route.get('/about', 'IndicesController.about')
Route.get('/rules', 'IndicesController.rules')

Route.group(() => {
  Route.get('/', 'AdminController.index')
})
  .prefix('/admin')
  .middleware('auth')
  .middleware('admin')
