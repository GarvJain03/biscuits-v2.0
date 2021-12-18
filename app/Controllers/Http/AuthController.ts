import { HttpContextContract } from '@ioc:Adonis/Core/HttpContext'
import { schema, rules } from '@ioc:Adonis/Core/Validator'
import User from 'App/Models/User'

export default class AuthController {
  public getLogin({ inertia }: HttpContextContract) {
    return inertia.render('auth/login')
  }

  public getRegister({ inertia }: HttpContextContract) {
    return inertia.render('auth/register')
  }

  public async postLogin({ request, auth, response, inertia }: HttpContextContract) {
    const username = request.input('username')
    const password = request.input('password')

    try {
      await auth.use('web').attempt(username, password, true)
      return response.redirect('/dashboard')
    } catch (error) {
      return inertia.render('auth/login', {
        error: 'Username or password is incorrect.',
      })
    }
  }

  public async postRegister({ request, auth, response, session }: HttpContextContract) {
    const registerUserSchema = schema.create({
      username: schema.string({ trim: true }, [rules.required(), rules.maxLength(255)]),
      first_member: schema.string({ trim: true }, [rules.required(), rules.maxLength(255)]),
      second_member: schema.string({ trim: true }, [rules.required(), rules.maxLength(255)]),
      first_member_email: schema.string({ trim: true }, [
        rules.required(),
        rules.email(),
        rules.maxLength(255),
      ]),
      second_member_email: schema.string({ trim: true }, [
        rules.required(),
        rules.email(),
        rules.maxLength(255),
      ]),
      password: schema.string({ trim: true }, [rules.required(), rules.maxLength(255)]),
      first_member_grade: schema.number([rules.required(), rules.range(1, 12)]),
      second_member_grade: schema.number([rules.required(), rules.range(1, 12)]),
      category: schema.string({ trim: true }, [rules.required()]),
    })

    try {
      const data = await request.validate({
        schema: registerUserSchema,
        messages: {
          'username.required': 'Username is required',
          'username.maxLength': 'Username must be less than 255 characters',
          'first_member.required': 'First member is required',
          'first_member.maxLength': 'First member must be less than 255 characters',
          'second_member.required': 'Second member is required',
          'second_member.maxLength': 'Second member must be less than 255 characters',
          'password.required': 'Password is required',
          'password.maxLength': 'Password must be less than 255 characters',
          'first_member_email.required': 'First member email is required',
          'first_member_email.email': 'First member email must be a valid email',
          'first_member_email.maxLength': 'First member email must be less than 255 characters',
          'second_member_email.required': 'Second member email is required',
          'second_member_email.email': 'Second member email must be a valid email',
          'second_member_email.maxLength': 'Second member email must be less than 255 characters',
          'first_member_grade.required': 'First member grade is required',
          'first_member_grade.range': 'First member grade must be between 1 and 12',
          'second_member_grade.required': 'Second member grade is required',
          'second_member_grade.range': 'Second member grade must be between 1 and 12',
          'category.required': 'Category is required',
        },
      })

      const user = await User.create(data)

      await auth.login(user, true)
      return response.redirect('/dashboard')
    } catch (error) {
      session.flash('errors', error.messages)
      return response.redirect('/auth/register')
    }
  }

  public async logout({ auth, response }: HttpContextContract) {
    await auth.logout()
    return response.redirect('/')
  }
}
