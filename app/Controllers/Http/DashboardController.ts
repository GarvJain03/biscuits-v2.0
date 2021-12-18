import { HttpContextContract } from '@ioc:Adonis/Core/HttpContext'

export default class DashboardController {
  public getDashboard({ inertia, auth }: HttpContextContract) {
    const user = auth.user
    return inertia.render('dashboard', { user })
  }
}
