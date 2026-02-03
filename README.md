# 🐘 CRUD Backend Laravel - Sistemas Legados

![PHP](https://img.shields.io/badge/PHP-8.3-777BB4?style=for-the-badge&logo=php&logoColor=white)
![Laravel](https://img.shields.io/badge/Laravel-11-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![SQLite](https://img.shields.io/badge/SQLite-07405E?style=for-the-badge&logo=sqlite&logoColor=white)

API RESTful desenvolvida em Laravel para gerenciamento de inventário de sistemas legados.

## 📋 Requisitos

* **PHP:** 8.3 ou superior
* **Composer**
* **SQLite** (Geralmente já vem habilitado no PHP)

---

## 🚀 Instalação e Configuração

Siga os passos abaixo para rodar o projeto na sua máquina local.

### 1. Instalação das Dependências
Clone o projeto e instale as bibliotecas do Laravel:

```bash
git clone [https://github.com/Patito003/crud-backend-laravel](https://github.com/Patito003/crud-backend-laravel)
cd crud-backend-laravel
composer install
```

### 2. Configuração do Ambiente
Copie o arquivo de exemplo para criar o seu `.env`:

```bash
cp .env.example .env
```

Gere a chave da aplicação:

```bash
php artisan key:generate
```

### 3. Configuração do Banco de Dados (SQLite)
Este projeto utiliza SQLite. Para configurá-lo:

1. Crie um arquivo vazio chamado `database.sqlite` dentro da pasta `database/`:
   * **Linux/Mac:**
     ```bash
     touch database/database.sqlite
     ```
   * **Windows (PowerShell):**
     ```powershell
     New-Item database/database.sqlite
     ```

2. Abra o arquivo `.env` e verifique se as configurações de banco estão assim (apague as linhas de MySQL se existirem):

```ini
DB_CONNECTION=sqlite
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=laravel
# DB_USERNAME=root
# DB_PASSWORD=
```

### 4. Migração e Dados Iniciais (Seed)
Crie as tabelas e popule o banco com dados de teste (50 sistemas gerados automaticamente):

```bash
php artisan migrate:fresh --seed
```

### 5. Executar o Servidor
Inicie o servidor local do Laravel:

```bash
php artisan serve
```
O projeto estará rodando em: `http://127.0.0.1:8000`

---

## 🔌 Endpoints Disponíveis

**Atenção:** Lembre-se de configurar o Header `Accept: application/json` nas requisições.

| Método | Rota | Descrição |
| :--- | :--- | :--- |
| **GET** | `/api/sistemas` | Lista todos os sistemas cadastrados |
| **POST** | `/api/sistemas` | Cadastra um novo sistema |
| **GET** | `/api/sistemas/{id}` | Busca os detalhes de um sistema pelo ID |
| **PUT** | `/api/sistemas/{id}` | Atualiza os dados de um sistema existente |
| **DELETE** | `/api/sistemas/{id}` | Remove um sistema do banco de dados |

### 📝 Exemplo de JSON para Cadastro (POST)

```json
{
    "nome": "Sistema RH 2000",
    "linguagem": "Delphi",
    "status": "ativo",
    "descricao": "Sistema legado de gestão de pessoas."
}
```