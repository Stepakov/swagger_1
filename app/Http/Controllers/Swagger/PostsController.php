<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;

/**
 * @OA\Post(
 *     path="/api/posts",
 *     summary="Create Post",
 *     tags={"Post"},
 *
 *     @OA\RequestBody(
 *         @OA\JsonContent(
 *             allOf={
 *                 @OA\Schema(
 *                     @OA\Property(
 *                         property="title",
 *                         type="string",
 *                         example="Post 1",
 *                     ),
 *                     @OA\Property(
 *                         property="likes",
 *                         type="integer",
 *                         example=20,
 *                     ),
 *                 )
 *             }
 *         )
 *     ),
 *
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *             @OA\Property(
 *                 property="data",
 *                 type="object",
 *                 @OA\Property(
 *                     property="id",
 *                     type="integer",
 *                     example=3,
 *                 ),
 *                 @OA\Property(
 *                     property="title",
 *                     type="string",
 *                     example="Post 1",
 *                 ),
 *                 @OA\Property(
 *                     property="likes",
 *                     type="integer",
 *                     example=1,
 *                 ),
 *             ),
 *         )
 *     ),
 * ),
 *
 * @OA\Get(
 *     path="/api/posts",
 *     summary="Get All Posts",
 *     tags={"Post"},
 *
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *             @OA\Property(
 *                 property="data",
 *                 type="array",
 *                 @OA\Items(
 *                     @OA\Property(
 *                         property="id",
 *                         type="integer",
 *                         example=3,
 *                     ),
 *                     @OA\Property(
 *                         property="title",
 *                         type="string",
 *                         example="Post 1",
 *                     ),
 *                     @OA\Property(
 *                         property="likes",
 *                         type="integer",
 *                         example=1,
 *                     ),
 *                 )
 *             ),
 *         )
 *     ),
 * ),
 *
 * @OA\Get(
 *     path="/api/posts/{post}",
 *     summary="Get One Post",
 *     tags={"Post"},
 *     @OA\Parameter(
 *         description="Posts's Id",
 *         in="path",
 *         name="post",
 *         required=true,
 *         example=1
 *     ),
 *
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *             @OA\Property(
 *                 property="data",
 *                 type="object",
 *                 @OA\Property(
 *                     property="id",
 *                     type="integer",
 *                     example=3,
 *                 ),
 *                 @OA\Property(
 *                     property="title",
 *                     type="string",
 *                     example="Post 1",
 *                 ),
 *                 @OA\Property(
 *                     property="likes",
 *                     type="integer",
 *                     example=1,
 *                 ),
 *             ),
 *         )
 *     ),
 * ),
 *
 * @OA\Patch(
 *     path="/api/posts/{post}",
 *     summary="Update One Post",
 *     tags={"Post"},
 *     @OA\Parameter(
 *         description="Posts's Id",
 *         in="path",
 *         name="post",
 *         required=true,
 *         example=3
 *     ),
 *
 *     @OA\RequestBody(
 *         @OA\JsonContent(
 *             allOf={
 *                 @OA\Schema(
 *                     @OA\Property(
 *                         property="title",
 *                         type="string",
 *                         example="Update Post 1",
 *                     ),
 *                     @OA\Property(
 *                         property="likes",
 *                         type="integer",
 *                         example=21,
 *                     ),
 *                 )
 *             }
 *         )
 *     ),
 *
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *             @OA\Property(
 *                 property="data",
 *                 type="object",
 *                 @OA\Property(
 *                     property="id",
 *                     type="integer",
 *                     example=3,
 *                 ),
 *                 @OA\Property(
 *                     property="title",
 *                     type="string",
 *                     example="Post 1",
 *                 ),
 *                 @OA\Property(
 *                     property="likes",
 *                     type="integer",
 *                     example=1,
 *                 ),
 *             ),
 *         )
 *     ),
 * ),
 *
 * @OA\Delete(
 *      path="/api/posts/{post}",
 *      summary="Delete One Post",
 *      tags={"Post"},
 *      @OA\Parameter(
 *          description="Posts's Id",
 *          in="path",
 *          name="post",
 *          required=true,
 *          example=3
 *      ),
 *
 *      @OA\Response(
 *          response=200,
 *          description="OK",
 *          @OA\JsonContent(
 *              @OA\Property(
 *                  property="message",
 *                  type="string",
 *                  example="done",
 *              ),
 *          )
 *      ),
 *  ),
 */
class PostsController extends Controller
{
    //
}
