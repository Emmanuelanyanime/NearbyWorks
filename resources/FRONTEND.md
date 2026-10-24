# NearbyWorks frontend

Public, authentication, and account views share the design system in `css/app.css`, Alpine interactions in `js/app.js`, and the components in `views/components/`.

From the repository root, rebuild the frontend with:

```sh
node resources/build-frontend.mjs
```

This uses the existing Vite configuration and dependencies, writes its manifest and versioned bundles to `public/asset/nearbyworks/`, and preserves the downloaded images and logos there. The shared head reads that manifest. The root `npm run build` command still uses its original output directory; use the command above for these views.

Photography and third-party resource-logo provenance is documented in `public/asset/nearbyworks/SOURCES.md`. Those logos identify independent outbound links. NearbyWorks uses its own text wordmark.

Routes, controllers, models, database configuration, and dependencies are outside this frontend change. Account forms retain existing endpoints and validation fields; registration sends the first and last name fields required by its current controller. The existing backend mixes these fields with a `name` database/profile contract, which needs a separate backend correction.
