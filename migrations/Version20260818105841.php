<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260818105841 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE review DROP FOREIGN KEY FK_794381C616230A8');
        $this->addSql('ALTER TABLE review CHANGE video_game_id video_game_id INT NOT NULL, CHANGE user_id user_id INT NOT NULL, CHANGE comment comment LONGTEXT DEFAULT NULL, CHANGE rating note INT NOT NULL');
        $this->addSql('ALTER TABLE review ADD CONSTRAINT FK_794381C616230A8 FOREIGN KEY (video_game_id) REFERENCES video_game (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE review DROP FOREIGN KEY FK_794381C616230A8');
        $this->addSql('ALTER TABLE review CHANGE video_game_id video_game_id INT DEFAULT NULL, CHANGE user_id user_id INT DEFAULT NULL, CHANGE comment comment LONGTEXT NOT NULL, CHANGE note rating INT NOT NULL');
        $this->addSql('ALTER TABLE review ADD CONSTRAINT FK_794381C616230A8 FOREIGN KEY (video_game_id) REFERENCES video_game (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
    }
}
