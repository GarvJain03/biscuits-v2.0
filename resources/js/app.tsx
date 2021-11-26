import { InertiaApp } from '@inertiajs/inertia-react'
import React from 'react'
import { render } from 'react-dom'
import '../css/app.css'

const el = document.getElementById('app')

render(
  <InertiaApp
    // Pass props from the server down to the client app
    initialPage={JSON.parse(el.dataset.page)}
    // Dynamically load the required page component
    resolveComponent={(name) => import(`./Pages/${name}`).then((module) => module.default)}
    initialComponent={''}
  />,
  el
)
