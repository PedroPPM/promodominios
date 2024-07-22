#!/bin/bash
set -e

# Qualquer configuração necessária antes de iniciar o Apache
# ...

# Inicie o servidor web Apache
exec apache2-foreground
