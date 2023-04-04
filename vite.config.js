import { defineConfig } from 'vite'

// https://vitejs.dev/config/
export default defineConfig({
	build: {
		copyPublicDir: false,
		outDir: 'dist',
	},
	preview: {
		port: 3000,
	}
});