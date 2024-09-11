import { defineConfig } from 'vite';
import VitePluginRestart from 'vite-plugin-restart';
import path from 'path';

const PORT = process.env.DDEV_VITE_PORT;
const ORIGIN = `${process.env.DDEV_PRIMARY_URL}:${PORT}`;

export default defineConfig(({ command }) => ({
  base: command === 'serve' ? '' : '/dist/',
  publirDir: path.resolve(__dirname, 'src/public'),
  build: {
    manifest: true,
    outDir: path.resolve(__dirname, 'web/dist/'),
    rollupOptions: {
      input: {
        entrypoint: path.resolve(__dirname, 'src/entrypoint.js'),
      },
    },
  },
  server: {
    host: '0.0.0.0',
    port: PORT,
    origin: ORIGIN,
    strictPort: true,
  },
  plugins: [
    VitePluginRestart({
      reload: [path.resolve(__dirname, 'templates/**/*.twig')],
    }),
  ],
}));
