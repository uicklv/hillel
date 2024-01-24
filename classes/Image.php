<?php

class Image
{
    private string $imagePath;

    private int $newWidth;

    private int $newHeight;

    private ImageType $newImageType;

    public function __construct(string $imagePath)
    {
        $this->setImagePath($imagePath);
    }

    public function resize(int $width, int $height): void
    {
        $this->setNewWidth($width);
        $this->setNewHeight($height);
    }

    /**
     * @param ImageType $newImageType
     * @return void
     */
    public function convert(ImageType $newImageType): void
    {
        $this->setNewImageType($newImageType);
    }

    public function save(?string $newName = null)
    {
        //get current width and height for image
        [$oldWidth, $oldHeight] = getimagesize($this->getImagePath());

        //get current extension
        $format = $this->getImageExt($this->getImagePath());

        //detect new format
        $getNewImageFormat = $this->getNewImageType();
        $newFormat = isset($getNewImageFormat) ? $getNewImageFormat->value : $format;

        //detect new width and height
        $newWidth = $this->getNewWidth() ?? $oldWidth ;
        $newHeight = $this->getNewHeight() ?? $oldHeight;


        $functionName = ImageType::getImageCreateFunction($format);
        $functionSaveName = ImageType::getImageSaveFunction($newFormat);

        $newImage = $functionName($this->getImagePath());
        $tmp = imagecreatetruecolor($newWidth, $newHeight);

        imagecopyresampled($tmp, $newImage, 0, 0, 0, 0,
            $newWidth, $newHeight, $oldWidth, $oldHeight);

        $fileName = $this->getNewName($newFormat, $newName);

        $functionSaveName($tmp, $fileName);

        imagedestroy($tmp);
    }

    private function getNewName(string $newFormat, ?string $newName = null): string
    {
        $fileName = $newName ?? pathinfo($this->getImagePath(), PATHINFO_FILENAME);

        return $fileName . '.' . $newFormat;
    }

    /**
     * @param string $imagePath
     * @return void
     * @throws Exception
     */
    private function checkImageType(string $imagePath): void
    {
        $imageType = $this->getImageExt($imagePath);
        $allowedTypes = ImageType::values();
        if (!in_array($imageType, $allowedTypes)) {
            throw new Exception('Format is invalid!Allowed formats:' . implode(', ', $allowedTypes));
        }
    }

    private function getImageExt(string $imagePath): string
    {
        return pathinfo($imagePath, PATHINFO_EXTENSION);
    }

    /**
     * @param string $imagePath
     */
    public function setImagePath(string $imagePath): void
    {
        if (!file_exists($imagePath)) {
            throw new Exception('File not found');
        }

        $this->checkImageType($imagePath);

        $this->imagePath = $imagePath;
    }

    /**
     * @return string
     */
    public function getImagePath(): string
    {
        return $this->imagePath;
    }

    /**
     * @param int $newWidth
     */
    public function setNewWidth(int $newWidth): void
    {
        if ($newWidth <= 0) {
            throw new Exception('Invalid width');
        }
        $this->newWidth = $newWidth;
    }

    /**
     * @param int $newHeight
     */
    public function setNewHeight(int $newHeight): void
    {
        if ($newHeight <= 0) {
            throw new Exception('Invalid width');
        }
        $this->newHeight = $newHeight;
    }

    /**
     * @param ImageType $newImageType
     */
    public function setNewImageType(ImageType $newImageType): void
    {
        $this->newImageType = $newImageType;
    }

    /**
     * @return int|null
     */
    public function getNewWidth(): int|null
    {
        return $this->newWidth ?? null;
    }

    /**
     * @return int|null
     */
    public function getNewHeight(): int|null
    {
        return $this->newHeight ?? null;
    }

    /**
     * @return ImageType
     */
    public function getNewImageType(): ImageType|null
    {
        return $this->newImageType ?? null;
    }
}