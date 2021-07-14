<?php

namespace app\core;

class Session
{
    private static $instance;

    public static function getInstance() : Session
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function start(): bool
    {
        session_start();
        return true;
    }

    public function getId(): string
    {
        return session_id();
    }

    public function setId($id): void
    {
        session_id($id);
    }

    public function contains($key): bool
    {
        return isset($_SESSION[$key]);
    }

    public function cookieExists(): bool
    {
        return !empty($_COOKIE);
    }

    public function sessionExists(): bool
    {
        return !empty($_SESSION);
    }

    public function setName($name): void
    {
        session_name($name);
    }

    public function getName(): string
    {
        return session_name();
    }

    public function destroy(): void
    {
        session_destroy();
    }

    public function delete($key, $value = null): void
    {
        if ($this->sessionExists()) unset($_SESSION[$key][$value]);
    }

    public function set(string $key, $value): void
    {
        $_SESSION[$key] = $value;
    }

    public function setSavePath($savePath): void
    {
        session_save_path($savePath);
    }

    public function get($key)
    {
        return $_SESSION[$key];
    }

    public function keyExists($key) : bool
    {
        return array_key_exists("$key", $_SESSION);
    }
}