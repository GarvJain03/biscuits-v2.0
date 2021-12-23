/* eslint-disable @typescript-eslint/naming-convention */
import React, { useState } from 'react'
import Layout from '../../components/Layouts/Layout'
import useTitle from '../../lib/hooks/use-title'
import { Link } from '@inertiajs/inertia-react'
import { Inertia } from '@inertiajs/inertia'

interface IRegisterProps {
  errors: {}
}

const Register: React.FC<IRegisterProps> = (errors: IRegisterProps) => {
  useTitle('Register')

  const [values, setValues] = useState({
    username: '',
    first_member: '',
    second_member: '',
    first_member_email: '',
    second_member_email: '',
    password: '',
    first_member_grade: '',
    second_member_grade: '',
    category: '',
  })

  const handleChange = (e: React.ChangeEvent<HTMLInputElement>) => {
    setValues({ ...values, [e.target.name]: e.target.value })
  }

  const handleSelect = (e: React.ChangeEvent<HTMLSelectElement>) => {
    setValues({ ...values, [e.target.name]: e.target.value })
  }

  const handleSubmit = (e: React.FormEvent<HTMLFormElement>) => {
    e.preventDefault()
    Inertia.post('/auth/register', values)
  }

  return (
    <Layout>
      <section className="text-gray-600 body-font">
        <div className="container px-5 py-12 mx-auto flex flex-wrap items-center">
          <div className="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
            <form
              className="bg-gray-light shadow-md rounded-lg px-8 pt-6 pb-8 mb-4 flex flex-col my-2"
              onSubmit={handleSubmit}
            >
              <div className="-mx-3 md:flex mb-6">
                <div className="md:w-1/2 px-3 mb-6 md:mb-0">
                  <label className="block tracking-wide text-text-green text-xl font-bold mb-2">
                    Names
                  </label>
                  <input
                    className="appearance-none block w-full text-grey-darke py-3 px-4 mb-3 bg-cool-gray rounded-lg border-gray-300 focus:border-dark-bg focus:ring-2 focus:ring-gray-500 text-base outline-none text-white leading-8 transition-colors duration-200 ease-in-out"
                    name="first_member"
                    type="text"
                    placeholder="Participant 1"
                    value={values.first_member}
                    onChange={handleChange}
                  />
                  {errors.errors &&
                    Object.values(errors).map((error: any) => (
                      <p className="text-red-500 text-sm font-bold mb-2">{error.first_member[0]}</p>
                    ))}
                  <input
                    className="appearance-none block w-full text-grey-darke py-3 px-4 mb-3 bg-cool-gray rounded-lg border-gray-300 focus:border-dark-bg focus:ring-2 focus:ring-gray-500 text-base outline-none text-white leading-8 transition-colors duration-200 ease-in-out"
                    name="second_member"
                    type="text"
                    placeholder="Participant 2"
                    value={values.second_member}
                    onChange={handleChange}
                  />
                  {errors.errors &&
                    Object.values(errors).map((error: any) => (
                      <p className="text-red-500 text-sm font-bold mb-2">
                        {error.second_member[0]}
                      </p>
                    ))}
                </div>
                <div className="md:w-1/2 px-3">
                  <label className="block tracking-wide text-text-green text-xl font-bold mb-2">
                    Email
                  </label>
                  <input
                    className="appearance-none block w-full text-grey-darke py-3 px-4 mb-3 bg-cool-gray rounded-lg border-gray-300 focus:border-dark-bg focus:ring-2 focus:ring-gray-500 text-base outline-none text-white leading-8 transition-colors duration-200 ease-in-out"
                    name="first_member_email"
                    type="email"
                    placeholder="Participant 1"
                    value={values.first_member_email}
                    onChange={handleChange}
                  />
                  {errors.errors &&
                    Object.values(errors).map((error: any) => (
                      <p className="text-red-500 text-sm font-bold mb-2">
                        {error.first_member_email[0]}
                      </p>
                    ))}
                  <input
                    className="appearance-none block w-full text-grey-darke py-3 px-4 mb-3 bg-cool-gray rounded-lg border-gray-300 focus:border-dark-bg focus:ring-2 focus:ring-gray-500 text-base outline-none text-white leading-8 transition-colors duration-200 ease-in-out"
                    name="second_member_email"
                    type="email"
                    placeholder="Participant 2"
                    value={values.second_member_email}
                    onChange={handleChange}
                  />
                  {errors.errors &&
                    Object.values(errors).map((error: any) => (
                      <p className="text-red-500 text-sm font-bold mb-2">
                        {error.second_member_email[0]}
                      </p>
                    ))}
                </div>
              </div>
              <div className="-mx-3 md:flex mb-6">
                <div className="md:w-1/2 px-3 mb-6 md:mb-0">
                  <label className="block tracking-wide text-text-green text-xl font-bold mb-2">
                    Class
                  </label>
                  <input
                    className="appearance-none block w-full text-grey-darke py-3 px-4 mb-3 bg-cool-gray rounded-lg border-gray-300 focus:border-dark-bg focus:ring-2 focus:ring-gray-500 text-base outline-none text-white leading-8 transition-colors duration-200 ease-in-out"
                    name="first_member_grade"
                    type="integer"
                    placeholder="Participant 1"
                    value={values.first_member_grade}
                    onChange={handleChange}
                  />
                  {errors.errors &&
                    Object.values(errors).map((error: any) => (
                      <p className="text-red-500 text-sm font-bold mb-2">
                        {error.first_member_grade[0]}
                      </p>
                    ))}
                  <input
                    className="appearance-none block w-full text-grey-darke py-3 px-4 mb-3 bg-cool-gray rounded-lg border-gray-300 focus:border-dark-bg focus:ring-2 focus:ring-gray-500 text-base outline-none text-white leading-8 transition-colors duration-200 ease-in-out"
                    name="second_member_grade"
                    type="integer"
                    placeholder="Participant 2"
                    value={values.second_member_grade}
                    onChange={handleChange}
                  />
                  {errors.errors &&
                    Object.values(errors).map((error: any) => (
                      <p className="text-red-500 text-sm font-bold mb-2">
                        {error.second_member_grade[0]}
                      </p>
                    ))}
                </div>
                <div className="md:w-1/2 px-3">
                  <label className="block tracking-wide text-text-green text-xl font-bold mb-2">
                    Username and Password
                  </label>
                  <input
                    className="appearance-none block w-full text-grey-darke py-3 px-4 mb-3 bg-cool-gray rounded-lg border-gray-300 focus:border-dark-bg focus:ring-2 focus:ring-gray-500 text-base outline-none text-white leading-8 transition-colors duration-200 ease-in-out"
                    name="username"
                    type="text"
                    placeholder="johndoe"
                    value={values.username}
                    onChange={handleChange}
                  />
                  {errors.errors &&
                    Object.values(errors).map((error: any) => (
                      <p className="text-red-500 text-sm font-bold mb-2">{error.username[0]}</p>
                    ))}
                  <input
                    className="appearance-none block w-full text-grey-darke py-3 px-4 mb-3 bg-cool-gray rounded-lg border-gray-300 focus:border-dark-bg focus:ring-2 focus:ring-gray-500 text-base outline-none text-white leading-8 transition-colors duration-200 ease-in-out"
                    name="password"
                    type="password"
                    placeholder="********"
                    value={values.password}
                    onChange={handleChange}
                  />
                  {errors.errors &&
                    Object.values(errors).map((error: any) => (
                      <p className="text-red-500 text-sm font-bold mb-2">{error.password[0]}</p>
                    ))}
                </div>
              </div>
              <div className="-mx-3 md:flex mb-6">
                <div className="md:w-1/2 px-3 mb-6 md:mb-0">
                  <label
                    className="block tracking-wide text-text-green text-xl font-bold mb-2"
                    htmlFor="grid-first-name"
                  >
                    Category
                  </label>
                  <select
                    name="category"
                    className="appearance-none block w-full text-grey-darke py-3 px-4 mb-3 bg-cool-gray rounded-lg border-gray-300 focus:border-dark-bg focus:ring-2 focus:ring-gray-500 text-base outline-none text-white leading-8 transition-colors duration-200 ease-in-out"
                    value={values.category}
                    onChange={handleSelect}
                  >
                    <option value="">Select Category</option>
                    <option value="individual">Individual</option>
                    <option value="school">School</option>
                  </select>
                  {errors.errors &&
                    Object.values(errors).map((error: any) => (
                      <p className="text-red-500 text-sm font-bold mb-2">{error.category[0]}</p>
                    ))}
                </div>
              </div>
              <div className="-mx-3 flex flex-col mb-2 justify-center">
                <p className="text-sm text-center font-semibold text-text-green mb-3">
                  Don't have an account? Sign Up{' '}
                  <Link href="/auth/login" className="font-bold underline">
                    here
                  </Link>
                </p>
                <button className="text-dark-bg font-bold py-2 mx-2 bg-text-green border-0 focus:outline-none hover:bg-heading-green rounded text-lg">
                  Register
                </button>
              </div>
            </form>
          </div>
          <div className="lg:w-2/6 md:w-1/2 p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
            <svg
              width="449"
              height="435"
              viewBox="0 0 449 435"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M407.5 272L425 262.5V286.5L448 272.5M389.5 260.5L405.5 252V270.5M371 248.5L386 240L386.5 258.5M353 237L366.5 228.5V246M334.5 225L347 217.5V233M315.5 212.5L328 206V220.595M39.5 271.5L23 261.5V285L1 271M56.5 257.5L42.5 249.5V271M75 247.5L61.5 238V255.5M94.5 235L81 225.5V243M113 224L100 214.5V232M124.5 208L119 203V219.5"
                stroke="#1DB954"
                stroke-width="3"
              />
              <path
                d="M307.5 207L415 275L224 388.5L31 275.5L49.5 265L51.5 259.5L124.5 216L294.5 214.5L307.5 207Z"
                fill="#373737"
              />
              <path
                d="M314 198V55L156.5 74.5L137.5 94.5V243L150 236L164.5 258.5L176.5 250.5L190.5 275L283.5 221C293.667 217 314 206.8 314 198Z"
                fill="url(#paint0_linear_383_2)"
              />
              <path
                d="M314 55L190.5 126.5V109.5L177 102.5L164 110V93.5L150.5 87L138 94.5V77.5L262 7.5V23L288.5 21.5V38.5L314 37.5V55Z"
                fill="#1DB954"
              />
              <path
                d="M314.5 37.5L190.5 109.5V126.5L177 120V102.5L300.5 31L314.5 37.5Z"
                fill="#1ED760"
              />
              <path d="M164 93.5V110L150.5 104V87L274.5 15.5L288.5 21.5L164 93.5Z" fill="#1ED760" />
              <path d="M138 77.5V94.5L124.5 88.5V71L248.5 0L262.5 7.5L138 77.5Z" fill="#1ED760" />
              <path d="M190.5 275V126.5L177 119.5L176.5 268L190.5 275Z" fill="#272727" />
              <path d="M164.5 259L164 110L150.5 104L150 252.5L164.5 259Z" fill="#272727" />
              <path d="M137.5 243.5L138 94.4999L124.5 88L124 236.5L137.5 243.5Z" fill="#272727" />
              <path d="M224 359.5V369.5L396 268L392 260.5L224 359.5Z" fill="#272727" />
              <path d="M224 388V410L416.5 298L415 275L224 388Z" fill="#272727" />
              <path d="M31 275.5L224 388.5V410.5L31 299.5V275.5Z" fill="#413F3F" />
              <path d="M224 369.5V359.5L51 259.5V270L224 369.5Z" fill="#413F3F" />
              <path d="M235.5 385L254 396.5V424.5L269 433.5" stroke="#1DB954" stroke-width="3" />
              <path d="M253 375L271.5 386.5V414.5L286.5 423.5" stroke="#1DB954" stroke-width="3" />
              <path d="M374 305L392.5 316.5V344.5L407.5 353.5" stroke="#1DB954" stroke-width="3" />
              <path d="M391.5 295L410 306.5V334.5L425 343.5" stroke="#1DB954" stroke-width="3" />
              <path d="M340 326L358.5 337.5V365.5L373.5 374.5" stroke="#1DB954" stroke-width="3" />
              <path d="M357.5 316L376 327.5V355.5L391 364.5" stroke="#1DB954" stroke-width="3" />
              <path d="M306 345L324.5 356.5V384.5L339.5 393.5" stroke="#1DB954" stroke-width="3" />
              <path d="M323.5 335L342 346.5V374.5L357 383.5" stroke="#1DB954" stroke-width="3" />
              <path d="M409 286L427.5 297.5V325.5L442.5 334.5" stroke="#1DB954" stroke-width="3" />
              <path d="M270 366L288.5 377.5V405.5L303.5 414.5" stroke="#1DB954" stroke-width="3" />
              <path d="M287.5 356L306 367.5V395.5L321 404.5" stroke="#1DB954" stroke-width="3" />
              <path
                d="M215.5 385L196.5 396V424.5L182 433.5M197.5 375L179 386L178.5 414.5L164 423M180.5 365L162 376.5V404.5L148 412.5M163 355.5L144.5 366.5V395L130 403.5M146 345L127 356.5V386L113 394M128.5 335L109.5 347V376L95 384.5"
                stroke="#1DB954"
                stroke-width="3"
              />
              <path
                d="M238 132L294 100.5M295 114.5L205 166M205 181.5L294 131M294 146L206.5 196.5M294 161.5L217.5 205.5"
                stroke="url(#paint1_linear_383_2)"
                stroke-width="4"
                stroke-linecap="round"
              />
              <path
                d="M110.5 325L91.5 336V364.5L77 373.5M92.5 315L74 326L73.5 354.5L59 363M75.5 305L57 316.5V344.5L43 352.5M58 295.5L39.5 306.5V335L25 343.5M41 285L22 296.5V326L8 334"
                stroke="#1DB954"
                stroke-width="3"
              />
              <path d="M177 119.5L190.5 126.5V109.5L177 102.5V119.5Z" fill="#1CAA4E" />
              <path d="M150.5 104L164 110V93.5L150.5 87V104Z" fill="#1CAA4E" />
              <path d="M138 77.5V94.5L124.5 88V71L138 77.5Z" fill="#1CAA4E" />
              <defs>
                <linearGradient
                  id="paint0_linear_383_2"
                  x1="225.75"
                  y1="55"
                  x2="226"
                  y2="293.5"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#353535" />
                  <stop offset="1" stop-color="#303030" />
                </linearGradient>
                <linearGradient
                  id="paint1_linear_383_2"
                  x1="265"
                  y1="175"
                  x2="281.5"
                  y2="209.5"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-opacity="0.2" />
                  <stop offset="1" />
                </linearGradient>
              </defs>
            </svg>
          </div>
        </div>
      </section>
    </Layout>
  )
}

export default Register
