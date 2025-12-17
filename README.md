# Vinishop

Aplicação Laravel para gerenciamento de vinhos.

## 🚀 Configuração Rápida do Ambiente

### Pré-requisitos

- Docker instalado e em execução
- Git

### Instalação

1. **Clone o repositório**:
```bash
git clone git@github.com:petrusnog/vinishop.git
cd vinishop
```

2. **Copie o arquivo de ambiente**:
```bash
cp .env.example .env
```

3. **Instale as dependências com Docker** (cria a pasta vendor):
```bash
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php83-composer:latest \
    composer install --ignore-platform-reqs
```

**Windows (PowerShell):**
```powershell
docker run --rm -v ${PWD}:/var/www/html -w /var/www/html laravelsail/php83-composer:latest composer install --ignore-platform-reqs
```

4. **Suba os containers com Sail**:
```bash
./vendor/bin/sail up -d
```

5. **Gere a chave da aplicação**:
```bash
./vendor/bin/sail artisan key:generate
```

6. **Execute as migrations**:
```bash
./vendor/bin/sail artisan migrate
```

7. **Instale dependências do NPM**:
```bash
./vendor/bin/sail npm install
```

8. **Compile os assets** (opcional):
```bash
./vendor/bin/sail npm run dev
```

A aplicação estará disponível em: **http://localhost**

## 📋 Comandos Úteis

### Gerenciamento de Containers

```bash
# Iniciar containers
./vendor/bin/sail up -d

# Parar containers
./vendor/bin/sail down

# Ver logs
./vendor/bin/sail logs

# Reconstruir containers
./vendor/bin/sail build --no-cache
```

### Laravel Artisan

```bash
# Executar comandos artisan
./vendor/bin/sail artisan <comando>

# Exemplos:
./vendor/bin/sail artisan migrate
./vendor/bin/sail artisan db:seed
./vendor/bin/sail artisan tinker
./vendor/bin/sail artisan cache:clear
./vendor/bin/sail artisan config:clear
```

### Composer

```bash
# Instalar dependências
./vendor/bin/sail composer install

# Atualizar dependências
./vendor/bin/sail composer update

# Adicionar novo pacote
./vendor/bin/sail composer require <pacote>
```

### NPM

```bash
# Instalar dependências
./vendor/bin/sail npm install

# Modo desenvolvimento (watch)
./vendor/bin/sail npm run dev

# Build para produção
./vendor/bin/sail npm run build
```

### Testes

```bash
# Executar todos os testes
./vendor/bin/sail artisan test

# Executar testes com cobertura
./vendor/bin/sail artisan test --coverage
```

### Banco de Dados

```bash
# Acessar o MySQL
./vendor/bin/sail mysql

# Executar migrations
./vendor/bin/sail artisan migrate

# Resetar banco de dados
./vendor/bin/sail artisan migrate:fresh

# Resetar e popular
./vendor/bin/sail artisan migrate:fresh --seed
```

## 🛠️ Atalho (Opcional)

Para facilitar, você pode criar um alias no seu terminal:

```bash
# Adicione ao seu ~/.bashrc ou ~/.zshrc
alias sail='./vendor/bin/sail'
```

Depois é só usar:
```bash
sail up -d
sail artisan migrate
sail npm run dev
```

## 🔧 Solução de Problemas

### Porta 80 já está em uso
Se a porta 80 estiver ocupada, edite o arquivo [.env](.env) e altere:
```
APP_PORT=8000
```
A aplicação ficará disponível em http://localhost:8000

### Permissões de arquivo
Se houver problemas com permissões:
```bash
sudo chown -R $USER:$USER .
chmod -R 755 storage bootstrap/cache
```

### Containers não sobem
```bash
./vendor/bin/sail down
docker system prune -a
./vendor/bin/sail up -d
```

## 📚 Documentação

- [Laravel](https://laravel.com/docs)
- [Laravel Sail](https://laravel.com/docs/sail)
- [Docker](https://docs.docker.com/)

## 📄 Licença

Este projeto é open-source licenciado sob a [MIT license](https://opensource.org/licenses/MIT).
