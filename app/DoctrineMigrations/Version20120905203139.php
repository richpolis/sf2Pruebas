<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration,
    Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your need!
 */
class Version20120905203139 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is autogenerated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql");
        
        $this->addSql("CREATE TABLE category_affiliate (id INT AUTO_INCREMENT NOT NULL, category_id INT DEFAULT NULL, affiliate_id INT DEFAULT NULL, INDEX IDX_9E1A77FF12469DE2 (category_id), INDEX IDX_9E1A77FF9F12C49A (affiliate_id), PRIMARY KEY(id)) ENGINE = InnoDB");
        $this->addSql("CREATE TABLE affiliate (id INT AUTO_INCREMENT NOT NULL, url VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, token VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, UNIQUE INDEX UNIQ_597AA5CFE7927C74 (email), PRIMARY KEY(id)) ENGINE = InnoDB");
        $this->addSql("CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_64C19C15E237E06 (name), PRIMARY KEY(id)) ENGINE = InnoDB");
        $this->addSql("CREATE TABLE job (id INT AUTO_INCREMENT NOT NULL, category_id INT DEFAULT NULL, type VARCHAR(255) DEFAULT NULL, company VARCHAR(255) NOT NULL, logo VARCHAR(255) DEFAULT NULL, url VARCHAR(255) DEFAULT NULL, position VARCHAR(255) NOT NULL, location VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, how_to_apply LONGTEXT NOT NULL, token VARCHAR(255) NOT NULL, is_public TINYINT(1) DEFAULT NULL, is_activated TINYINT(1) DEFAULT NULL, email VARCHAR(255) NOT NULL, expires_at DATETIME NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, UNIQUE INDEX UNIQ_FBD8E0F85F37A13B (token), INDEX IDX_FBD8E0F812469DE2 (category_id), PRIMARY KEY(id)) ENGINE = InnoDB");
        $this->addSql("ALTER TABLE category_affiliate ADD CONSTRAINT FK_9E1A77FF12469DE2 FOREIGN KEY (category_id) REFERENCES category(id)");
        $this->addSql("ALTER TABLE category_affiliate ADD CONSTRAINT FK_9E1A77FF9F12C49A FOREIGN KEY (affiliate_id) REFERENCES affiliate(id)");
        $this->addSql("ALTER TABLE job ADD CONSTRAINT FK_FBD8E0F812469DE2 FOREIGN KEY (category_id) REFERENCES category(id)");
    }

    public function down(Schema $schema)
    {
        // this down() migration is autogenerated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql");
        
        $this->addSql("ALTER TABLE category_affiliate DROP FOREIGN KEY FK_9E1A77FF9F12C49A");
        $this->addSql("ALTER TABLE category_affiliate DROP FOREIGN KEY FK_9E1A77FF12469DE2");
        $this->addSql("ALTER TABLE job DROP FOREIGN KEY FK_FBD8E0F812469DE2");
        $this->addSql("DROP TABLE category_affiliate");
        $this->addSql("DROP TABLE affiliate");
        $this->addSql("DROP TABLE category");
        $this->addSql("DROP TABLE job");
    }
}
