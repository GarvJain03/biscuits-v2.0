/* eslint-disable @typescript-eslint/naming-convention */
import React from 'react'
import Authenticated from '../components/Layouts/Authenticated'
import { IUser } from '../lib/types'
import useTitle from '../lib/hooks/use-title'
import { Link } from '@inertiajs/inertia-react'

interface IDashboardProps {
  user: IUser
}

const Dashboard: React.FC<IDashboardProps> = ({ user }: IDashboardProps) => {
  useTitle('Dashboard')

  const show = {
    'username': user.username,
    'first member': user.first_member,
    'second member': user.second_member,
    'first member email': user.first_member_email,
    'second member email': user.second_member_email,
    'first member grade': user.first_member_grade,
    'second member grade': user.second_member_grade,
    'category': user.category,
  }

  return (
    <Authenticated>
      <div className="container px-5 py-24 mx-auto flex flex-wrap items-center">
        <div className="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
          <div className="lg:w-full md:w-full bg-gray-light rounded-lg p-8 w-full mt-10 md:mt-0">
            <h3 className="font-bold text-2xl mb-4 px-4 text-heading-green">{user.username}</h3>
            <div className="flex flex-wrap items-start mb-6">
              {Object.keys(show).map((key, index) => (
                <div className="w-full md:w-1/2 lg:w-1/3 px-4 my-3" key={index}>
                  <label className="uppercase text-text-green text-lg font-bold">{key}</label>
                  <div className="text-white uppercase text-xl">{show[key]}</div>
                </div>
              ))}
            </div>
            <div className="mx-3 flex flex-row mb-2 item-start">
              <button className="w-full text-dark-bg font-bold py-2 mx-2 bg-text-green border-0 focus:outline-none hover:bg-heading-green rounded text-lg">
                Edit Info
              </button>
              <Link
                href="/"
                className="w-full text-dark-bg text-center font-bold py-2 mx-2 bg-text-green border-0 focus:outline-none hover:bg-heading-green rounded text-lg"
              >
                Play
              </Link>
            </div>
          </div>
        </div>
        <div className="lg:w-2/6 md:w-1/2 bg-gray-light rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
          <h3 className="font-bold text-2xl mb-4 px-4 text-heading-green">Admin Response</h3>
          <div className="mx-3 flex flex-row mb-2 item-start"></div>
        </div>
      </div>
    </Authenticated>
  )
}

export default Dashboard
