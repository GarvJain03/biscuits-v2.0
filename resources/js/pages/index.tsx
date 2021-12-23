import React from 'react'
import Layout from '../components/Layouts/Layout'
import { Link } from '@inertiajs/inertia-react'

const Test = () => (
  <Layout>
    <section className="body-font">
      <div className="container mx-auto flex px-5 py-12 md:flex-row flex-col items-center">
        <div className="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
          <h1 className="title-font sm:text-7xl text-6xl mb-4 font-bold text-heading-green uppercase">
            Biscuits
          </h1>
          <p className="mb-8 text-text-green leading-relaxed font-normal text-2xl">
            Standing for Blend into Simulating <br /> Circuits. <br />
            Use your knowledge to clear the levels. <br />
            The Fastest Solver Wins!
          </p>
          <div className="flex justify-center">
            <Link
              href="/auth/login"
              className="inline-flex bg-button-gray text-heading-green border-0 py-2 px-6 focus:outline-none rounded-lg uppercase text-lg font-bold"
            >
              Login
            </Link>
            <Link
              href="/auth/register"
              className="ml-4 inline-flex bg-button-gray text-heading-green border-0 py-2 px-6 focus:outline-none rounded-lg uppercase text-lg font-bold"
            >
              Sign Up
            </Link>
          </div>
        </div>
        <div className="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
          <img
            className="object-cover object-center rounded"
            alt="hero"
            src="https://media.discordapp.net/attachments/869407124223053868/920598560532226069/unknown.png?width=665&height=616"
          />
        </div>
      </div>
    </section>
    <section>
      <h1 className="font-bold text-center text-heading-green sm:text-6xl text-5xl">
        Sponsored By
      </h1>
      <div className="flex items-center justify-center py-12">
        {' '}
        <img
          style={{ width: '225px', height: '230px' }}
          src="https://cdn.discordapp.com/attachments/869407124223053868/920043648912072724/unknown.png"
          alt="sponsor"
        />
      </div>
    </section>
  </Layout>
)

// All pages need to be exported as default
export default Test
