import { HttpContextContract } from '@ioc:Adonis/Core/HttpContext'

export default class IndicesController {
  public index({ inertia }: HttpContextContract) {
    return inertia.render('index')
  }

  public about({ inertia }: HttpContextContract) {
    return inertia.render('about')
  }

  public rules({ inertia }: HttpContextContract) {
    return inertia.render('rules')
  }
}
