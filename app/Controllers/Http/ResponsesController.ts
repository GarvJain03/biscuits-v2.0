import { HttpContextContract } from '@ioc:Adonis/Core/HttpContext'
import Response from 'App/Models/Response'

export default class ResponsesController {
  public async record_response({ request, response, auth }: HttpContextContract) {
    const answer = request.input('answer')
    const res = new Response()

    res.user_id = auth.user!.id
    res.question_id = auth.user!.question_on
    res.answer = answer

    await res.save()

    return response.redirect('/dashboard')
  }
}
