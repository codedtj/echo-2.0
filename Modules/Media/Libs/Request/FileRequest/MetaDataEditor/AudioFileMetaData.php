<?php


namespace Modules\Media\Libs\Request\MetaDataEditor\FileRequest;


use Modules\Media\Models\Music\AudioFile;

class AudioFileMetaData
{
    private AudioFile $file;

    private array $tags;

    public function __construct(AudioFile $file, array $tags)
    {
        $this->file = $file;
        $this->tags = $tags;
    }

    public function mergeTags()
    {
        $this->file->fetchTags();
        foreach ($this->file->tags as $key => $value) {
            if (!isset($this->tags[$key])) {
                $this->tags[$key] = implode(' / ', $value);
            } elseif (is_array($this->tags[$key]))
                $this->tags[$key] = implode(' / ', $this->tags[$key]);

        }

        return $this->tags;
    }

    public function writeTags()
    {
        $this->file->writeTags($this->tags);
        $this->file->fetchTags();
    }

    public function getFile()
    {
        return $this->file;
    }
}