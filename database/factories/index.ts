import Factory from '@ioc:Adonis/Lucid/Factory'
import User from 'App/Models/User'

export const UserFactory = Factory.define(User, async ({ faker }) => ({
  username: faker.internet.userName(),
  first_member: faker.name.firstName(),
  second_member: faker.name.firstName(),
  first_member_email: faker.internet.email(),
  second_member_email: faker.internet.email(),
  password: faker.internet.password(),
  first_member_grade: faker.datatype.number({ min: 1, max: 12 }),
  second_member_grade: faker.datatype.number({ min: 1, max: 12 }),
  category: 'school',
})).build()
