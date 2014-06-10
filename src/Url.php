<?php
/**
* This file is part of the League.url library
*
* @license http://opensource.org/licenses/MIT
* @link https://github.com/thephpleague/url/
* @version 3.0.0
* @package League.url
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/
namespace League\Url;

/**
 * A class to manipulate URLs
 *
 * @package League.url
 */
class Url extends AbstractUrl
{
    /**
     * Set the URL user component
     *
     * @param string $data
     *
     * @return self
     */
    public function setUser($data)
    {
        $this->user->set($data);

        return $this;
    }

    /**
     * get the URL user component
     *
     * @return {@link Component}
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set the URL pass component
     *
     * @param string $data
     *
     * @return self
     */
    public function setPass($data)
    {
        $this->pass->set($data);

        return $this;
    }

    /**
     * Return the current URL pass component
     *
     * @return {@link Component}
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * Set the URL port component
     *
     * @param string $data
     *
     * @return self
     */
    public function setPort($data)
    {
        $this->port->set($data);

        return $this;
    }

    /**
     * Return the URL Port component
     *
     * @return {@link Port}
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * Set the URL scheme component
     *
     * @param string $data
     *
     * @return self
     */
    public function setScheme($data)
    {
        $this->scheme->set($data);

        return $this;
    }

    /**
     * return the URL scheme component
     *
     * @return {@link Scheme}
     */
    public function getScheme()
    {
        return $this->scheme;
    }

    /**
     * Set the URL Fragment component
     *
     * @param string $data
     *
     * @return self
     */
    public function setFragment($data)
    {
        $this->fragment->set($data);

        return $this;
    }

    /**
     * return the URL fragment component
     *
     * @return {@link Component}
     */
    public function getFragment()
    {
        return $this->fragment;
    }

    /**
     * {@inheritdoc}
     */
    public function setEncodingType($encoding_type)
    {
        $this->query->setEncodingType($encoding_type);

        return $this;
    }

    /**
     * Set the URL query component
     *
     * @param mixed $data the data to be added to the query component
     *
     * @return self
     */
    public function setQuery($data)
    {
        $this->query->set($data);

        return $this;
    }

    /**
     * Return the current URL query component
     *
     * @return {@link Query}
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * Set the URL host component
     *
     * @param mixed $data the host data can be a array or a string
     *
     * @return self
     */
    public function setHost($data)
    {
        $this->host->set($data);

        return $this;
    }

    /**
     * Return the current Host component
     *
     * @return {@link Host}
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Set the URL path component
     *
     * @param mixed $data the host data can be a array or a string
     *
     * @return self
     */
    public function setPath($data)
    {
        $this->path->set($data);

        return $this;
    }

    /**
     * return the URL current path
     *
     * @return {@link Path}
     */
    public function getPath()
    {
        return $this->path;
    }
}