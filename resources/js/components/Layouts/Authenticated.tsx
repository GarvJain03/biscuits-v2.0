/* eslint-disable @typescript-eslint/naming-convention */
import React from 'react'
import Header from '../Header'

interface ILayoutProps {
  children: React.ReactNode
}

interface Link {
  links: {
    name: string
    url: string
  }[]
}

const Authenticated: React.FC<ILayoutProps> = ({ children }: ILayoutProps) => {
  const links: Link['links'] = [
    {
      name: 'Play',
      url: '/',
    },
    {
      name: 'Rules',
      url: '/rules',
    },
    {
      name: 'Dashboard',
      url: '/dashboard',
    },
    {
      name: 'Logout',
      url: '/auth/logout',
    },
  ]

  return (
    <div className="bg-dark-bg">
      <Header links={links} />
      <main className="container mx-auto text-heading-green">{children}</main>
    </div>
  )
}

export default Authenticated
