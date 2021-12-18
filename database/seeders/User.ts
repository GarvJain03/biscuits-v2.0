import BaseSeeder from '@ioc:Adonis/Lucid/Seeder'
import User from 'App/Models/User'
import { UserFactory } from 'Database/factories'

export default class UserSeeder extends BaseSeeder {
  public async run() {
    // Write your database queries inside the run method

    await UserFactory.createMany(20)

    await User.create({
      username: 'RoboKnights',
      first_member: 'admin',
      second_member: 'admin',
      first_member_email: 'admin@roboknights.in',
      second_member_email: 'admin@roboknights.in',
      password: 'amdin',
      first_member_grade: 12,
      second_member_grade: 12,
      category: 'individual',
      is_admin: true,
    })
  }
}
