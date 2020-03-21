# Cli

This is the Cli component for the Pomm database framework.

[![Latest Stable Version](https://poser.pugx.org/pomm-project/cli/v/stable)](https://packagist.org/packages/pomm-project/cli) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/pomm-project/Cli/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/pomm-project/Cli/?branch=master) [![Build Status](https://travis-ci.org/pomm-project/Cli.svg)](https://travis-ci.org/pomm-project/Cli) [![Monthly Downloads](https://poser.pugx.org/pomm-project/cli/d/monthly.png)](https://packagist.org/packages/pomm-project/cli) [![License](https://poser.pugx.org/pomm-project/cli/license.svg)](https://packagist.org/packages/pomm-project/cli)

## Configuration

Pomm's Cli is independent from one's development environment, it does not know what configuration types and files are used in the project. To make the Cli work, it is necessary to create a plain PHP bootstrap file that returns a Pomm instance. By default it is named `.pomm_cli_bootstrap.php`. If the project already has a script that returns a configured Pomm instance, it is possible to specify it to the Cli using the option `-b|--bootstrap-file="..."`.

## Database inspection

The `inspect` command uses the `Foundation.Inspector` to display information about the database structure.

 * pomm:inspect:database - Get schemas in a database.
 * pomm:inspect:schema   - Get relations information in a schema.
 * pomm:inspect:relation - Get information about a relation.

 ```
$ ./bin/pomm.php pomm:inspect:schema my_db_config

Found 3 relations in schema 'public'.
+-------------+-------+--------+---------+
| name        | type  | oid    | comment |
+-------------+-------+--------+---------+
| pika        | view  | 126516 | pika    |
| test_unique | table | 127619 |         |
| worker      | table | 126525 |         |
+-------------+-------+--------+---------+
 ```
 ```
$ ./bin/pomm.php pomm:inspect:relation archived_document my_db_config pylone

Relation pylone.archived_document
+----+-------------+-----------+---------+---------+---------+
| pk | name        | type      | default | notnull | comment |
+----+-------------+-----------+---------+---------+---------+
| *  | document_id | uuid      |         | yes     |         |
|    | title       | varchar   |         | yes     |         |
|    | archived_at | timestamp | now()   | yes     |         |
| *  | version     | int4      |         | yes     |         |
|    | usable      | bool      |         | no      |         |
+----+-------------+-----------+---------+---------+---------+
 ```

## Code generation

The `generate` commands create PHP class for use of database relations with Pomm's ModelManager package.

 * pomm:generate:structure    - Generate a RowStructure class according to the relation structure.
 * pomm:generate:model        - Generate a new configured Model class.
 * pomm:generate:entity       - Generate an empty FlexibleEntity class.
 * pomm:generate:relation-all - Generate the 3 files above for the given relation.
 * pomm:generate:schema-all   - Generate the 3 files above for every relation in the given schema.

Since you are going to add your own methods in the generated Model and FlexibleEntity classes, they will NOT be overwritten by default by the `generate` commands. It is somehow possible to do so by implicitly specifying the option `--force`. All the code in the overwritten classes will then be lost and replaced by a brand new class. Structure files are always overwritten without prior asking for confirmation. To avoid mixing these two kinds of classes, Structure classes are saved under a `AutoStructure` subdirectory.

### Prefixes options

By default, Pomm's ModelManager expects at least the classes to be saved using the following namespaces: `DatabaseConfigName\SchemaSchema`. It is possible to tell the Cli where this structure starts and how to tune it.

 * `--prefix-dir`, `-d` - indicates where to start the Namespace directory tree.
 * `--prefix-ns`, `-a`  - indicates an optional namespace prefix.

When no options are specified, generating all relations of public schema will act like the following:

```
$ ./bin/pomm.php pomm:generate:schema-all -v pomm_test
 ✓  Creating file './PommTest/PublicSchema/AutoStructure/Pika.php'.
 ✓  Creating file './PommTest/PublicSchema/PikaModel.php'.
 ✓  Creating file './PommTest/PublicSchema/Pika.php'.
 ✓  Creating file './PommTest/PublicSchema/AutoStructure/TestUnique.php'.
 ✓  Creating file './PommTest/PublicSchema/TestUniqueModel.php'.
 ✓  Creating file './PommTest/PublicSchema/TestUnique.php'.
 ✓  Creating file './PommTest/PublicSchema/AutoStructure/Worker.php'.
 ✓  Creating file './PommTest/PublicSchema/WorkerModel.php'.
 ✓  Creating file './PommTest/PublicSchema/Worker.php'.

$ tree PommTest
PommTest/
└── PublicSchema
    ├── AutoStructure
    │   ├── Pika.php
    │   ├── TestUnique.php
    │   └── Worker.php
    ├── PikaModel.php
    ├── Pika.php
    ├── TestUniqueModel.php
    ├── TestUnique.php
    ├── WorkerModel.php
    └── Worker.php

2 directories, 9 files
```

It is often not a good idea to have the model's namespace starting at project's root directory. Most of the time, it is put in a `Model` namespace under `sources/lib` directory:

```
$ ./bin/pomm.php pomm:generate:schema-all --prefix-dir sources/lib --prefix-ns Model pomm_test
 ✓  Creating file 'sources/lib/Model/PommTest/PublicSchema/AutoStructure/Pika.php'.
…
```
