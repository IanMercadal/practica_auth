# GUÍA

## Commit
Los commits están realizados en diferente orden que en la lista de Rafa, esto es debido lógicamente a que si
sigues los pasos de la tarea, no puedes ver los resultados de lo que haces al momento.

De otro modo, los commits tienen asignado el número correspondiente en el nombre.

## Acceder vía servidor del centro
1. http://imercadal.ifc33b.cifpfbmoll.eu/
2. Acceder a la carpeta practica_auth/public

## Archivo .env

APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:oPnHVAiGGsAjFDi9EeD4HG0YeosDA4St0fhNhyYwSoo=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=pgsql
DB_HOST=g1.ifc33b.cifpfbmoll.eu
DB_PORT=5432
DB_DATABASE=ian_centros_db
DB_USERNAME=imercadal
DB_PASSWORD=abc123.

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DRIVER=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=mailhog
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=null
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"