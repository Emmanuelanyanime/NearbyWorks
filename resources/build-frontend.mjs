import { fileURLToPath } from 'node:url';
import { build } from 'vite';

// Keep production output beside the images, inside the allowed frontend asset directory.
await build({
    root: fileURLToPath(new URL('../', import.meta.url)),
    configLoader: 'native',
    base: '/asset/nearbyworks/',
    build: {
        outDir: 'public/asset/nearbyworks',
        emptyOutDir: false,
    },
});
