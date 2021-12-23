import { HttpContextContract } from '@ioc:Adonis/Core/HttpContext'
import Question from 'App/Models/Question'
import Response from 'App/Models/Response'
import User from 'App/Models/User'

export default class IndexController {
  public async index({ inertia, auth }: HttpContextContract) {
    if (auth.use('web').isLoggedIn) {
      const user = auth.user as User
      const question = Question.query().where('id', user.question_on)
      return Response.query().where('user_id', user.id)
    } else {
      return inertia.render('index')
    }
  }

  public about({ inertia }: HttpContextContract) {
    return inertia.render('about')
  }

  public rules({ inertia }: HttpContextContract) {
    return inertia.render('rules')
  }
}
