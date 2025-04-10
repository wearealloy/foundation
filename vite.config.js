import tailwindcss from "@tailwindcss/vite";
import path from "path";
import { defineConfig } from "vite";
import VitePluginRestart from "vite-plugin-restart";

const PORT = 5173;
const ORIGIN = `${process.env.DDEV_PRIMARY_URL}:${PORT}`;

export default defineConfig(({ command }) => ({
  base: command === "serve" ? "" : "/dist/",
  publirDir: path.resolve(__dirname, "src/public"),
  build: {
    manifest: true,
    outDir: path.resolve(__dirname, "public_html/dist/"),
    rollupOptions: {
      input: {
        entrypoint: path.resolve(__dirname, "src/entrypoint.js"),
      },
    },
    sourcemap: true,
    emptyOutDir: true,
  },
  server: {
    host: "0.0.0.0",
    port: PORT,
    origin: ORIGIN,
    strictPort: true,
    cors: {
      origin: /https?:\/\/([A-Za-z0-9\-\.]+)?(\.ddev\.site)(?::\d+)?$/,
    },
  },
  plugins: [
    VitePluginRestart({
      reload: [path.resolve(__dirname, "templates/**/*.twig")],
    }),
    tailwindcss(),
  ],
  resolve: {
    alias: {
      "@": path.resolve(__dirname, "src"),
    },
  },
}));
