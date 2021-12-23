import React from 'react'
import Layout from '../components/Layouts/Layout'
import useTitle from '../lib/hooks/use-title'

const About = () => {
  useTitle('About')
  return (
    <Layout>
      <h1>About</h1>
    </Layout>
  )
}

export default About
