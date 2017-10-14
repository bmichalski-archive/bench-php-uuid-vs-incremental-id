# Run

```bash
composer install -vvv
docker-compose build
docker-compose stop
docker-compose up
docker exec -it benchphpmysqluuidvsincremental_php_1 bash
```

Then inside the container:
```bash
su - r
cd php-mysql-uuid-vs-incremental
```

# MySQL UUID benchmark
```bash
time php src/mysql_uuid_bench.php
```

# MySQL Incremental benchmark
```bash
time php src/mysql_incremental_bench.php
```

# PostgreSQL UUID benchmark
```bash
time php src/postgres_uuid_bench.php
```

# PostgreSQL Incremental benchmark
```bash
time php src/postgres_incremental_bench.php
```