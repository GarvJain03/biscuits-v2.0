import { HttpContextContract } from '@ioc:Adonis/Core/HttpContext'

export default class AdminController {
  public async index({ inertia }: HttpContextContract) {
    return inertia.render('admin/index')
  }
}
