<?php declare(strict_types=1);

/*
 * This file is part of the Monolog package.
 *
 * (c) Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Monolog\Handler;

<<<<<<< HEAD
=======
use Elastic\Transport\Exception\TransportException;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Elastica\Document;
use Monolog\Formatter\FormatterInterface;
use Monolog\Formatter\ElasticaFormatter;
use Monolog\Level;
use Elastica\Client;
use Elastica\Exception\ExceptionInterface;
use Monolog\LogRecord;
<<<<<<< HEAD
=======
use Monolog\Utils;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

/**
 * Elastic Search handler
 *
 * Usage example:
 *
 *    $client = new \Elastica\Client();
 *    $options = array(
 *        'index' => 'elastic_index_name',
 *        'type' => 'elastic_doc_type', Types have been removed in Elastica 7
 *    );
 *    $handler = new ElasticaHandler($client, $options);
 *    $log = new Logger('application');
 *    $log->pushHandler($handler);
 *
 * @author Jelle Vink <jelle.vink@gmail.com>
 * @phpstan-type Options array{
 *     index: string,
 *     type: string,
 *     ignore_error: bool
 * }
 * @phpstan-type InputOptions array{
 *     index?: string,
 *     type?: string,
 *     ignore_error?: bool
 * }
 */
class ElasticaHandler extends AbstractProcessingHandler
{
    protected Client $client;

    /**
     * @var mixed[] Handler config options
     * @phpstan-var Options
     */
    protected array $options;

    /**
     * @param Client  $client  Elastica Client object
     * @param mixed[] $options Handler configuration
     *
     * @phpstan-param InputOptions $options
     */
    public function __construct(Client $client, array $options = [], int|string|Level $level = Level::Debug, bool $bubble = true)
    {
        parent::__construct($level, $bubble);
        $this->client = $client;
        $this->options = array_merge(
            [
                'index'          => 'monolog',      // Elastic index name
                'type'           => 'record',       // Elastic document type
                'ignore_error'   => false,          // Suppress Elastica exceptions
            ],
            $options
        );
    }

    /**
     * @inheritDoc
     */
    protected function write(LogRecord $record): void
    {
        $this->bulkSend([$record->formatted]);
    }

    /**
     * @inheritDoc
     */
    public function setFormatter(FormatterInterface $formatter): HandlerInterface
    {
<<<<<<< HEAD
        if ($formatter instanceof ElasticaFormatter) {
=======
        if (Utils::unwrapFormatter($formatter) instanceof ElasticaFormatter) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            return parent::setFormatter($formatter);
        }

        throw new \InvalidArgumentException('ElasticaHandler is only compatible with ElasticaFormatter');
    }

    /**
     * @return mixed[]
     *
     * @phpstan-return Options
     */
    public function getOptions(): array
    {
        return $this->options;
    }

    /**
     * @inheritDoc
     */
    protected function getDefaultFormatter(): FormatterInterface
    {
        return new ElasticaFormatter($this->options['index'], $this->options['type']);
    }

    /**
     * @inheritDoc
     */
    public function handleBatch(array $records): void
    {
        $documents = $this->getFormatter()->formatBatch($records);
        $this->bulkSend($documents);
    }

    /**
     * Use Elasticsearch bulk API to send list of documents
     *
     * @param Document[] $documents
     *
     * @throws \RuntimeException
     */
    protected function bulkSend(array $documents): void
    {
        try {
            $this->client->addDocuments($documents);
<<<<<<< HEAD
        } catch (ExceptionInterface $e) {
=======
        } catch (ExceptionInterface | TransportException $e) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            if (!$this->options['ignore_error']) {
                throw new \RuntimeException("Error sending messages to Elasticsearch", 0, $e);
            }
        }
    }
}
