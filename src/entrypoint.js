import './css/global.css';
import App from './js/app';

App()
  .then(() => console.log('App loaded'))
  .catch((error) => console.log(error));

// Accept HMR as per: https://vitejs.dev/guide/api-hmr.html
if (import.meta.hot) {
  import.meta.hot.accept(() => {
    console.log('HMR');
  });
}
