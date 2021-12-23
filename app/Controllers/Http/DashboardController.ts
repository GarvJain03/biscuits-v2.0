import { HttpContextContract } from '@ioc:Adonis/Core/HttpContext'
import User from 'App/Models/User'

export default class DashboardController {
  public getDashboard({ inertia, auth }: HttpContextContract) {
    const user = User.find(auth.user!.id)
    return inertia.render('dashboard', {
      user,
    })
  }
}
