Array
(
    [#node] => stdClass Object
        (
            [vid] => 3
            [uid] => 1
            [title] => Grand Opening
            [log] =>
            [status] => 1
            [comment] => 2
            [promote] => 1
            [sticky] => 0
            [nid] => 3
            [type] => article
            [language] => und
            [created] => 1446220630
            [changed] => 1481312778
            [tnid] => 0
            [translate] => 0
            [revision_timestamp] => 1481312778
            [revision_uid] => 1
            [body] => Array
                (
                    [und] => Array
                        (
                            [0] => Array
                                (
                                    [value] => Coming soon!
                                    [summary] =>
                                    [format] => filtered_html
                                    [safe_value] =>
Coming soon!



                                    [safe_summary] =>
                                )

                        )

                )

            [field_tags] => Array
                (
                )

            [field_image] => Array
                (
                )

            [rdf_mapping] => Array
                (
                    [field_image] => Array
                        (
                            [predicates] => Array
                                (
                                    [0] => og:image
                                    [1] => rdfs:seeAlso
                                )

                            [type] => rel
                        )

                    [field_tags] => Array
                        (
                            [predicates] => Array
                                (
                                    [0] => dc:subject
                                )

                            [type] => rel
                        )

                    [rdftype] => Array
                        (
                            [0] => sioc:Item
                            [1] => foaf:Document
                        )

                    [title] => Array
                        (
                            [predicates] => Array
                                (
                                    [0] => dc:title
                                )

                        )

                    [created] => Array
                        (
                            [predicates] => Array
                                (
                                    [0] => dc:date
                                    [1] => dc:created
                                )

                            [datatype] => xsd:dateTime
                            [callback] => date_iso8601
                        )

                    [changed] => Array
                        (
                            [predicates] => Array
                                (
                                    [0] => dc:modified
                                )

                            [datatype] => xsd:dateTime
                            [callback] => date_iso8601
                        )

                    [body] => Array
                        (
                            [predicates] => Array
                                (
                                    [0] => content:encoded
                                )

                        )

                    [uid] => Array
                        (
                            [predicates] => Array
                                (
                                    [0] => sioc:has_creator
                                )

                            [type] => rel
                        )

                    [name] => Array
                        (
                            [predicates] => Array
                                (
                                    [0] => foaf:name
                                )

                        )

                    [comment_count] => Array
                        (
                            [predicates] => Array
                                (
                                    [0] => sioc:num_replies
                                )

                            [datatype] => xsd:integer
                        )

                    [last_activity] => Array
                        (
                            [predicates] => Array
                                (
                                    [0] => sioc:last_activity_date
                                )

                            [datatype] => xsd:dateTime
                            [callback] => date_iso8601
                        )

                )

            [cid] => 0
            [last_comment_timestamp] => 1446220630
            [last_comment_name] =>
            [last_comment_uid] => 1
            [comment_count] => 0
            [name] => cameron
            [picture] => 0
            [data] => b:0;
            [entity_view_prepared] => 1
            [content] => Array
                (
                    [body] => Array
                        (
                            [#theme] => field
                            [#weight] => 0
                            [#title] => Body
                            [#access] => 1
                            [#label_display] => hidden
                            [#view_mode] => full
                            [#language] => und
                            [#field_name] => body
                            [#field_type] => text_with_summary
                            [#field_translatable] => 0
                            [#entity_type] => node
                            [#bundle] => article
                            [#object] => stdClass Object
 *RECURSION*
                            [#items] => Array
                                (
                                    [0] => Array
                                        (
                                            [value] => Coming soon!
                                            [summary] =>
                                            [format] => filtered_html
                                            [safe_value] =>
Coming soon!



                                            [safe_summary] =>
                                        )

                                )

                            [#formatter] => text_default
                            [0] => Array
                                (
                                    [#markup] =>
Coming soon!



                                )

                        )

                    [#pre_render] => Array
                        (
                            [0] => _field_extra_fields_pre_render
                        )

                    [#entity_type] => node
                    [#bundle] => article
                    [links] => Array
                        (
                            [#theme] => links__node
                            [#pre_render] => Array
                                (
                                    [0] => drupal_pre_render_links
                                )

                            [#attributes] => Array
                                (
                                    [class] => Array
                                        (
                                            [0] => links
                                            [1] => inline
                                        )

                                )

                            [node] => Array
                                (
                                    [#theme] => links__node__node
                                    [#links] => Array
                                        (
                                        )

                                    [#attributes] => Array
                                        (
                                            [class] => Array
                                                (
                                                    [0] => links
                                                    [1] => inline
                                                )

                                        )

                                )

                            [comment] => Array
                                (
                                    [#theme] => links__node__comment
                                    [#links] => Array
                                        (
                                        )

                                    [#attributes] => Array
                                        (
                                            [class] => Array
                                                (
                                                    [0] => links
                                                    [1] => inline
                                                )

                                        )

                                )

                        )

                )

        )

    [#id] => comment-form
    [#attributes] => Array
        (
            [class] => Array
                (
                    [0] => comment-form
                )

        )

    [#theme] => Array
        (
            [0] => comment_form__node_article
            [1] => comment_form
        )

    [#action] => /comment/reply/3
    [author] => Array
        (
            [#weight] => -2
            [_author] => Array
                (
                    [#type] => item
                    [#title] => Your name
                    [#markup] => cameron
                )

            [name] => Array
                (
                    [#type] => value
                    [#value] => cameron
                )

            [mail] => Array
                (
                    [#type] => textfield
                    [#title] => E-mail
                    [#default_value] =>
                    [#required] =>
                    [#maxlength] => 64
                    [#size] => 30
                    [#description] => The content of this field is kept private and will not be shown publicly.
                    [#access] =>
                )

            [homepage] => Array
                (
                    [#type] => textfield
                    [#title] => Homepage
                    [#default_value] =>
                    [#maxlength] => 255
                    [#size] => 30
                    [#access] =>
                )

            [date] => Array
                (
                    [#type] => textfield
                    [#title] => Authored on
                    [#default_value] =>
                    [#maxlength] => 25
                    [#size] => 20
                    [#access] =>
                )

            [status] => Array
                (
                    [#type] => radios
                    [#title] => Status
                    [#default_value] => 1
                    [#options] => Array
                        (
                            [1] => Published
                            [0] => Not published
                        )

                    [#access] =>
                )

        )

    [subject] => Array
        (
            [#type] => textfield
            [#title] => Subject
            [#maxlength] => 64
            [#default_value] =>
            [#access] => 1
            [#weight] => -1
        )

    [is_anonymous] => Array
        (
            [#type] => value
            [#value] =>
        )

    [cid] => Array
        (
            [#type] => value
            [#value] =>
        )

    [pid] => Array
        (
            [#type] => value
            [#value] =>
        )

    [nid] => Array
        (
            [#type] => value
            [#value] => 3
        )

    [language] => Array
        (
            [#type] => value
            [#value] => und
        )

    [uid] => Array
        (
            [#type] => value
            [#value] => 0
        )

    [node_type] => Array
        (
            [#type] => value
            [#value] => comment_node_article
        )

    [actions] => Array
        (
            [#type] => actions
            [submit] => Array
                (
                    [#type] => submit
                    [#value] => Save
                    [#access] => 1
                    [#weight] => 19
                )

            [preview] => Array
                (
                    [#type] => submit
                    [#value] => Preview
                    [#access] => 1
                    [#weight] => 20
                    [#submit] => Array
                        (
                            [0] => comment_form_build_preview
                        )

                )

        )

    [#parents] => Array
        (
        )

    [#entity] => stdClass Object
        (
            [nid] => 3
            [name] =>
            [mail] =>
            [homepage] =>
            [subject] =>
            [comment] =>
            [cid] =>
            [pid] =>
            [language] => und
            [uid] => 0
            [node_type] => comment_node_article
        )

    [comment_body] => Array
        (
            [#type] => container
            [#attributes] => Array
                (
                    [class] => Array
                        (
                            [0] => field-type-text-long
                            [1] => field-name-comment-body
                            [2] => field-widget-text-textarea
                        )

                )

            [#weight] => 0
            [#tree] => 1
            [#language] => und
            [und] => Array
                (
                    [0] => Array
                        (
                            [#entity_type] => comment
                            [#entity] => stdClass Object
                                (
                                    [nid] => 3
                                    [name] =>
                                    [mail] =>
                                    [homepage] =>
                                    [subject] =>
                                    [comment] =>
                                    [cid] =>
                                    [pid] =>
                                    [language] => und
                                    [uid] => 0
                                    [node_type] => comment_node_article
                                )

                            [#bundle] => comment_node_article
                            [#field_name] => comment_body
                            [#language] => und
                            [#field_parents] => Array
                                (
                                )

                            [#columns] => Array
                                (
                                    [0] => value
                                    [1] => format
                                )

                            [#title] => Comment
                            [#description] =>
                            [#required] => 1
                            [#delta] => 0
                            [#weight] => 0
                            [#type] => text_format
                            [#default_value] =>
                            [#rows] => 5
                            [#attributes] => Array
                                (
                                    [class] => Array
                                        (
                                            [0] => text-full
                                        )

                                )

                            [#format] =>
                            [#base_type] => textarea
                        )

                    [#theme] => field_multiple_value_form
                    [#field_name] => comment_body
                    [#cardinality] => 1
                    [#title] => Comment
                    [#required] => 1
                    [#description] =>
                    [#prefix] =>

                    [#suffix] =>

                    [#max_delta] => 0
                    [#after_build] => Array
                        (
                            [0] => field_form_element_after_build
                        )

                    [#language] => und
                    [#field_parents] => Array
                        (
                        )

                )

            [#access] => 1
        )

    [#pre_render] => Array
        (
            [0] => _field_extra_fields_pre_render
        )

    [#entity_type] => comment
    [#bundle] => comment_node_article
    [#form_id] => comment_node_article_form
    [#type] => form
    [#build_id] => form-VKprXQygx6eKOlzvHmW_PibC3pzesK04qTZGCMs-AVo
    [form_build_id] => Array
        (
            [#type] => hidden
            [#value] => form-VKprXQygx6eKOlzvHmW_PibC3pzesK04qTZGCMs-AVo
            [#id] => form-VKprXQygx6eKOlzvHmW_PibC3pzesK04qTZGCMs-AVo
            [#name] => form_build_id
            [#parents] => Array
                (
                    [0] => form_build_id
                )

        )

    [#token] => comment_node_article_form
    [form_token] => Array
        (
            [#id] => edit-comment-node-article-form-form-token
            [#type] => token
            [#default_value] => p4lfFELIw1cjH1qne-Jk_OH1Z-S0lkrtueHm9LOwzLo
            [#parents] => Array
                (
                    [0] => form_token
                )

        )

    [form_id] => Array
        (
            [#type] => hidden
            [#value] => comment_node_article_form
            [#id] => edit-comment-node-article-form
            [#parents] => Array
                (
                    [0] => form_id
                )

        )

    [#method] => post
    [#theme_wrappers] => Array
        (
            [0] => form
        )

    [#tree] =>
    [#validate] => Array
        (
            [0] => comment_form_validate
        )

    [#submit] => Array
        (
            [0] => comment_form_submit
        )

)
