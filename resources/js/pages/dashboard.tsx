import React from 'react'
import Layout from '../components/Layout'

const Dashboard: React.FC = () => {
  return (
    <div>
      <Layout>
        <a href="/auth/logout">Logout</a>
      </Layout>
    </div>
  )
}

export default Dashboard
