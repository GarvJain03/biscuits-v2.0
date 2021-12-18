import { HttpContextContract } from '@ioc:Adonis/Core/HttpContext'

export default class EnsureAdmin {
  public async handle({ auth, response }: HttpContextContract, next: () => Promise<void>) {
    // code for middleware goes here. ABOVE THE NEXT CALL
    if (!auth.user?.is_admin) {
      return response.redirect('/dashboard')
    }
    await next()
  }
}
