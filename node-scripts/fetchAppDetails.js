import gplay from 'google-play-scraper';
import { readFile, writeFile } from 'fs/promises';
import path from 'path';
import { fileURLToPath } from 'url';

// Get __dirname equivalent in ES module
const __filename = fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);

// Resolve root path of your Laravel project
const rootPath = path.resolve(__dirname, '..');

async function fetchApps() {
  try {
    const appIdsPath = path.join(rootPath, 'storage/app/app_ids.json');
    const appsJsonPath = path.join(rootPath, 'storage/app/public/apps.json');

    const packageIds = JSON.parse(await readFile(appIdsPath, 'utf8'));
    const appDetails = [];

    for (const appId of packageIds) {
      try {
        const details = await gplay.app({ appId });

        appDetails.push({
          title: details.title,
          icon: details.icon,
          summary: details.summary,
          description: details.description,
          url: details.url,
          installs: details.installs,
          score: details.score,
          ratings: details.ratings,
          developer: details.developer,
          developerWebsite: details.developerWebsite,
          genre: details.genre,
          released: details.released,
          updated: details.updated,
          screenshots: details.screenshots,
        });
        
      } catch (err) {
        console.error(`❌ Failed to fetch details for ${appId}: ${err.message}`);
      }
    }

    await writeFile(appsJsonPath, JSON.stringify(appDetails, null, 2));
    console.log('✅ App data written to apps.json');
  } catch (err) {
    console.error('❌ Script failed:', err.message);
  }
}

fetchApps();
