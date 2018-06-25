import Home from './components/pages/HomeComponent'
import Service from './components/pages/ServiceComponent'
import Login from './components/auth/LoginComponent'
import Therapies from './components/pages/TherapiesComponent'
import ChineseInfo from './components/pages/ChineseInfoComponent'
import About from './components/pages/AboutComponent'
import Contact from './components/pages/ContactComponent'

export const routes = [
  { path: '/', component: Home, name: 'Home' },
  { path: '/diensten', component: Service, name: 'Service'},
  { path: '/therapieen', component: Therapies, name: 'Therapies'},
  { path: '/cn-info', component: ChineseInfo, name: 'ChineseInfo'},
  { path: '/over-ons', component: About, name: 'About'},
  { path: '/contact', component: Contact, name: 'Contact'},
  { path: '/inloggen', component: Login, name: 'Login'}
]