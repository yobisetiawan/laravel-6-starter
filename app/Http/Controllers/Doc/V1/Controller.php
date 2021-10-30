<?php

/**
 * @OA\Info(
 *    title="Laravel Api",
 *    version="1.0.0",
 * )
 */

/**
 * @OA\SecurityScheme(
 *     type="http",
 *     description="Login with email and password to get the authentication token",
 *     name="Token based Based",
 *     in="header",
 *     scheme="bearer",
 *     bearerFormat="JWT",
 *     securityScheme="bearerAuth",
 * )
 */

/**
 * @OA\Parameter(
 *  in="path",
 *  parameter="OA_id",
 *  name="id",
 *  required=true,
 *      @OA\Schema(
 *          type="integer"
 *      )
 *  ),
 */
